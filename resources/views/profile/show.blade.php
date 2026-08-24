<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel van {{ $user->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .profile-card { border: 1px solid #ddd; padding: 20px; border-radius: 10px; }
        .profile-picture { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; }
        .info { margin: 10px 0; }
        .label { font-weight: bold; }
        .btn { display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        .btn-edit { background: #28a745; }
        .back-link { margin-top: 20px; display: block; }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1>Profiel van {{ $user->name }}</h1>
        
        @if($user->profile_picture)
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profielfoto" class="profile-picture">
        @else
            <p>Geen profielfoto</p>
        @endif
        
        <div class="info">
            <span class="label">Gebruikersnaam:</span> {{ $user->username ?? 'Niet ingesteld' }}
        </div>
        
        <div class="info">
            <span class="label">Email:</span> {{ $user->email }}
        </div>
        
        <div class="info">
            <span class="label">Verjaardag:</span> {{ $user->birthday ? date('d-m-Y', strtotime($user->birthday)) : 'Niet ingesteld' }}
        </div>
        
        <div class="info">
            <span class="label">Over mij:</span>
            <p>{{ $user->about_me ?? 'Geen beschrijving' }}</p>
        </div>
        
        @auth
            @if(auth()->user()->id === $user->id)
                <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-edit">Profiel bewerken</a>
            @endif
        @endauth
        
        <a href="/" class="back-link">← Terug naar home</a>
    </div>
</body>
</html>