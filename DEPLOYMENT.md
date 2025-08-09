# 🚀 Guide de Déploiement - Portfolio Justin Fimbo

Ce guide vous accompagne dans le déploiement du portfolio sur différents environnements.

## 📋 Liste de Vérification Pré-Déploiement

### ✅ Contenu à Personnaliser

**Images et fichiers :**
- [ ] `public/images/justin-profile.svg` → Remplacer par une vraie photo professionnelle (.jpg/.png)
- [ ] `public/files/Justin_Fimbo_CV.pdf` → Ajouter le CV réel en PDF
- [ ] `public/favicon.ico` → Personnaliser le favicon
- [ ] `public/images/apple-touch-icon.png` → Icône pour iOS (180x180px)

**Configuration :**
- [ ] Copier `env.example.portfolio` vers `.env`
- [ ] Configurer `APP_URL` avec le domaine final
- [ ] Générer `APP_KEY` avec `php artisan key:generate`
- [ ] Configurer les emails SMTP pour le formulaire de contact

**Contenus personnalisés :**
- [ ] Vérifier les liens sociaux dans les templates
- [ ] Mettre à jour les informations de contact
- [ ] Personnaliser les projets dans la section portfolio
- [ ] Ajuster les statistiques dans la hero section

## 🌐 Déploiement sur Hébergement Partagé

### Configuration Apache (.htaccess)

Créer un fichier `.htaccess` dans le dossier `public/` :

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### Structure de fichiers recommandée

```
domain.com/
├── public_html/ (ou www/)    → Pointer vers /portfolio/public
├── portfolio/
│   ├── app/
│   ├── resources/
│   ├── vendor/
│   ├── .env
│   └── ...
```

### Commandes de déploiement

```bash
# 1. Upload des fichiers via FTP/SFTP
# 2. Installer les dépendances
composer install --optimize-autoloader --no-dev

# 3. Configurer l'environnement
cp env.example.portfolio .env
php artisan key:generate

# 4. Compiler les assets (en local puis upload)
npm run build

# 5. Optimiser pour la production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Définir les permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## ☁️ Déploiement VPS/Cloud

### Serveur Ubuntu/Debian

#### 1. Installation des prérequis

```bash
# Mise à jour du système
sudo apt update && sudo apt upgrade -y

# Installation PHP 8.2
sudo apt install -y php8.2-fpm php8.2-cli php8.2-common php8.2-mysql \
php8.2-xml php8.2-xmlrpc php8.2-curl php8.2-gd php8.2-imagick \
php8.2-cli php8.2-dev php8.2-imap php8.2-mbstring php8.2-opcache \
php8.2-soap php8.2-zip php8.2-intl php8.2-bcmath

# Installation de Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Installation de Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt-get install -y nodejs

# Installation de Nginx
sudo apt install -y nginx

# Installation de Certbot (SSL)
sudo apt install -y certbot python3-certbot-nginx
```

#### 2. Configuration Nginx

Créer `/etc/nginx/sites-available/justinfimbo.com` :

```nginx
server {
    listen 80;
    server_name justinfimbo.com www.justinfimbo.com;
    root /var/www/portfolio/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }

    # Cache des assets statiques
    location ~* \.(css|js|gif|ico|jpeg|jpg|png|svg|woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
}
```

#### 3. Activation et SSL

```bash
# Activer le site
sudo ln -s /etc/nginx/sites-available/justinfimbo.com /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx

# Obtenir le certificat SSL
sudo certbot --nginx -d justinfimbo.com -d www.justinfimbo.com

# Auto-renouvellement SSL
sudo crontab -e
# Ajouter : 0 12 * * * /usr/bin/certbot renew --quiet
```

#### 4. Déploiement de l'application

```bash
# Cloner le dépôt
cd /var/www
sudo git clone https://github.com/username/portfolio.git
cd portfolio

# Installation des dépendances
sudo composer install --optimize-autoloader --no-dev
sudo npm install && npm run build

# Configuration
sudo cp env.example.portfolio .env
sudo php artisan key:generate

# Permissions
sudo chown -R www-data:www-data /var/www/portfolio
sudo chmod -R 755 /var/www/portfolio
sudo chmod -R 775 /var/www/portfolio/storage
sudo chmod -R 775 /var/www/portfolio/bootstrap/cache

# Optimisations
sudo php artisan config:cache
sudo php artisan route:cache
sudo php artisan view:cache
```

## 🔄 Script de Déploiement Automatique

Créer `deploy.sh` :

```bash
#!/bin/bash

echo "🚀 Déploiement du Portfolio Justin Fimbo..."

# Variables
APP_DIR="/var/www/portfolio"
BACKUP_DIR="/var/backups/portfolio"

# Backup de l'ancienne version
echo "📦 Sauvegarde de l'ancienne version..."
sudo mkdir -p $BACKUP_DIR
sudo cp -R $APP_DIR $BACKUP_DIR/$(date +%Y%m%d_%H%M%S)

# Mise à jour du code
echo "⬇️ Récupération de la dernière version..."
cd $APP_DIR
sudo git pull origin main

# Installation des dépendances
echo "📚 Installation des dépendances..."
sudo composer install --optimize-autoloader --no-dev
sudo npm install && npm run build

# Mise à jour de la configuration
echo "⚙️ Mise à jour de la configuration..."
sudo php artisan config:cache
sudo php artisan route:cache
sudo php artisan view:cache

# Permissions
echo "🔐 Mise à jour des permissions..."
sudo chown -R www-data:www-data $APP_DIR
sudo chmod -R 755 $APP_DIR
sudo chmod -R 775 $APP_DIR/storage
sudo chmod -R 775 $APP_DIR/bootstrap/cache

# Redémarrage des services
echo "🔄 Redémarrage des services..."
sudo systemctl reload nginx
sudo systemctl reload php8.2-fpm

echo "✅ Déploiement terminé avec succès!"
echo "🌐 Site disponible : https://justinfimbo.com"
```

Rendre exécutable : `chmod +x deploy.sh`

## 📊 Monitoring et Maintenance

### Logs à surveiller

```bash
# Logs Laravel
tail -f storage/logs/laravel.log

# Logs Nginx
tail -f /var/log/nginx/access.log
tail -f /var/log/nginx/error.log

# Logs PHP-FPM
tail -f /var/log/php8.2-fpm.log
```

### Tâches de maintenance

```bash
# Nettoyage des caches
php artisan cache:clear
php artisan view:clear
php artisan config:clear

# Optimisation des tables (si base de données)
php artisan db:prune

# Mise à jour des dépendances
composer update
npm update && npm run build
```

### Backup automatique

Ajouter dans crontab (`crontab -e`) :

```bash
# Backup quotidien à 2h du matin
0 2 * * * /usr/local/bin/backup-portfolio.sh

# Nettoyage des logs anciens
0 3 * * 0 find /var/www/portfolio/storage/logs/ -name "*.log" -mtime +30 -delete
```

## 🔒 Sécurité

### Configuration PHP recommandée

Dans `php.ini` :

```ini
expose_php = Off
display_errors = Off
log_errors = On
error_log = /var/log/php_errors.log
max_execution_time = 30
memory_limit = 256M
upload_max_filesize = 10M
post_max_size = 10M
```

### Firewall UFW

```bash
sudo ufw allow 22/tcp
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw enable
```

### Fail2Ban pour protection SSH

```bash
sudo apt install fail2ban
sudo systemctl enable fail2ban
sudo systemctl start fail2ban
```

## 🏷️ Versions et Tags

### Stratégie de versioning

```bash
# Version majeure (changements importants)
git tag -a v1.0.0 -m "Version 1.0.0 - Site initial"

# Version mineure (nouvelles fonctionnalités)
git tag -a v1.1.0 -m "Version 1.1.0 - Ajout blog"

# Patch (corrections)
git tag -a v1.1.1 -m "Version 1.1.1 - Corrections CSS"

# Pousser les tags
git push origin --tags
```

## 📞 Support Post-Déploiement

En cas de problème, vérifier :

1. **Logs d'erreur** : `storage/logs/laravel.log`
2. **Permissions** : `755` pour les dossiers, `644` pour les fichiers
3. **Configuration** : Vérifier `.env` et les caches
4. **Services** : `nginx`, `php-fpm` actifs
5. **SSL** : Certificat valide et auto-renouvellement

**Contact technique :**
- 📧 justin.fimbo@uzashop.com
- 🏢 UZASHOP - Beni, RDC
- 💼 LinkedIn: [Justin Fimbo](https://linkedin.com/in/justin-fimbo)

---

**🎯 Checklist finale :**
- [ ] Site accessible via HTTPS
- [ ] Formulaire de contact fonctionnel
- [ ] Images et fichiers personnalisés
- [ ] Performance optimisée (GTmetrix A/B)
- [ ] SEO configuré (Google Search Console)
- [ ] Monitoring en place
- [ ] Backup automatique configuré

---
*Guide de déploiement Portfolio Justin Fimbo v1.0*
