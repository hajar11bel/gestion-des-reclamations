<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations - RAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zJ3eZD5AuF8B+1fFpIp94Mql6iWN8kFkew0pP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/user/dashUser.css') }}">
</head>
<body>
    <div class="header">
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout">Déconnexion</button></form>
    </div>
    @if(session('success'))
        <div class="alert" id="success-message">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="card red">
                <a href="/reclamation">Réclamer</a>
            </div>
            <div class="card green">
                <a href="/suivreReclamation">Suivre Réclamation</a>
            </div>
            <div class="card blue">
                <a href="/historique">Historique des Réclamations</a>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
</body>
<footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
<script>
    // Wait until the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get the success message element
        var successMessage = document.getElementById('success-message');

        // If the success message exists, set a timer to hide it after 15 seconds
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // 15 seconds
        }
    });
</script>
</html>
