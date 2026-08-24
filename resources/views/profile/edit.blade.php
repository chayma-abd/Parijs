<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel bewerken</title>
</head>
<body>
    <h1>Profiel bewerken</h1>
    
    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div>
            <label>Gebruikersnaam</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}">
        </div>
        
        <div>
            <label>Verjaardag</label>
            <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}">
        </div>
        
        <div>
            <label>Over mij</label>
            <textarea name="about_me">{{ old('about_me', $user->about_me) }}</textarea>
        </div>
        
        <div>
            <label>Profielfoto</label>
            <input type="file" name="profile_picture">
        </div>
        
        <button type="submit">Opslaan</button>
        <a href="{{ route('profile.show', $user->id) }}">Annuleren</a>
    </form>
</body>
</html>