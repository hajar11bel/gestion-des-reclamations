<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réclamater - RAK</title>
    <link rel="stylesheet" href="{{ asset('css/user/reclamation.css') }}">
</head>
<body>
    <div class="header">
        <a href="/dashuser" class="accueil">Accueil</a> <!-- Lien vers la page principale -->
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout">Déconnexion</button></form>
    </div>
    <div class="container">
        <h2>Faire une Réclamation</h2>
        <form action="/ajouterreclamation" method="POST">
           
            @csrf
           

            <label for="reclamation">Réclamation :</label>
            <textarea id="reclamation" name="message" required></textarea>
            
            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>
</html>
