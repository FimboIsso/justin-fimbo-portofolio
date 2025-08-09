@extends('admin.layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white shadow rounded-lg p-6">
        <h1 class="text-xl font-semibold mb-4">Connexion Admin</h1>
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm mb-1">Mot de passe</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
            <button class="btn-modern">Se connecter</button>
        </form>
    </div>
@endsection
