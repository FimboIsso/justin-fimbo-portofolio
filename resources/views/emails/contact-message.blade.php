<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #3b82f6, #f97316);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 30px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field-label {
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 5px;
            display: block;
        }

        .field-value {
            background-color: #f8fafc;
            padding: 10px;
            border-left: 4px solid #3b82f6;
            border-radius: 4px;
        }

        .message-content {
            background-color: #f1f5f9;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #f97316;
            margin-top: 10px;
        }

        .footer {
            background-color: #1f2937;
            color: #9ca3af;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        .footer a {
            color: #3b82f6;
            text-decoration: none;
        }

        .badge {
            display: inline-block;
            background-color: #10b981;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>📧 Nouveau Message de Contact</h1>
            <p>Portfolio Justin Fimbo</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="field">
                <span class="field-label">👤 Nom du contact :</span>
                <div class="field-value">{{ $messageData['name'] }}</div>
            </div>

            <div class="field">
                <span class="field-label">📧 Adresse email :</span>
                <div class="field-value">
                    <a href="mailto:{{ $messageData['email'] }}">{{ $messageData['email'] }}</a>
                </div>
            </div>

            <div class="field">
                <span class="field-label">📋 Sujet :</span>
                <div class="field-value">{{ $messageData['subject'] }}</div>
            </div>

            <div class="field">
                <span class="field-label">💬 Message :</span>
                <div class="message-content">
                    {!! nl2br(e($messageData['message'])) !!}
                </div>
            </div>

            <div class="field">
                <span class="field-label">🕒 Reçu le :</span>
                <div class="field-value">{{ $messageData['sent_at']->format('d/m/Y à H:i') }}</div>
                <span class="badge">Nouveau</span>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>
                <strong>Portfolio Justin Fimbo</strong><br>
                Développeur & Entrepreneur | UZASHOP<br>
                Beni, Nord-Kivu, RDC
            </p>
            <p>
                <a href="mailto:{{ $messageData['email'] }}">Répondre directement</a> |
                <a href="https://justinfimbo.com">Voir le portfolio</a>
            </p>
        </div>
    </div>
</body>

</html>
