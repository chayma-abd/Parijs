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