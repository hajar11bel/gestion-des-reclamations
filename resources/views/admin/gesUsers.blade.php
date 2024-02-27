<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-qGi72ej8oR6L/ax8HtWVHYtk4Jxx6Sqz2OOPLIQsObCPwEnkF+4dEdOnsDS+JM0D" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/gesUsers.css') }}">
    <style>
      
    </style>
</head>
<body>
    <div class="header">
        <a href="dash" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout" style="background-color: #333; border:none;">Déconnexion</button></form>
    </div>
    <div class="container mt-5 bg-white">
        <h1 class="mb-4">Gestion des Utilisateurs</h1>
        <div class="row justify-content-end">
            
        <a href="/addUser" class="col-3"><button class="btn btn-secondary btn-md ml-3 " >Nouveau utilisateur  <i class="fas fa-add"></i> </button></a><br>
        </div>
        <div class="row  mt-5">
            <div class="col-lg-8  mx-auto">
            <table class="table table-bordered table-hover  ">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">CIN</th>
                        <th scope="col">Département</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item )
                    <tr>
                        
                        <td>{{$item->name}}</td>
                        <td>{{$item->cin}}</td>
                        <td>{{$item->departement_id}}</td>
                        <td class="">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="" class="btn btn-primary btn-sm me-2"><i class="fas fa-info-circle"></i> Détail</a>
                            <a href="/edit/{{$item->id}}" class="btn btn-warning btn-sm me-2"><i class="fas fa-edit"></i> Modifier</a>
                            <form action="/delet/{{$item->id}} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ">Supprimer</button>
                            </form>
                        </td> 
                    </div>
                    </tr>@endforeach
                   
                    <!-- Ajoutez ici d'autres lignes pour plus d'utilisateurs -->
                </tbody>
            </table>
        </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-Pd3mBPJL8wpp6kpxa+CFVWuSTQxZ7Bg/z7szcv0EpV5yYxGY1GaqnMLc3mT9h8hK" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
