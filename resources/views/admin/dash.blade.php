<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin - RAK</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dash.css') }}">
<body>
    <div class="header">
        
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="/admin/logout " method="POST">
            @csrf
        <button class="logout" style="background-color: #333; border:none;">Déconnexion</button></form>
    </div>
    <div class="container">
        <div class="card">
            <h2>Gestion des Utilisateurs</h2>
            <div class="card-content">
                <p>Gérer les utilisateurs de l'application.</p>
                <a href="/gesUsers" class="card-link" id="btn1">Accéder</a>
            </div>
        </div>
        <div class="card">
            <h2>Gestion du Personnel</h2>
            <div class="card-content">
                <p>Gérer le personnel de l'entreprise.</p>
                <a href="/gesPerso" class="card-link" id="btn2">Accéder</a>
            </div>
        </div>
        <div class="card">
            <h2>Gestion des Réclamations</h2>
            <div class="card-content">
                <p>Gérer les réclamations des utilisateurs.</p>
                <a href="/gesRecla" class="card-link" id="btn3">Accéder</a>
            </div>
        </div>
    </div>
   

</body>
</html>
