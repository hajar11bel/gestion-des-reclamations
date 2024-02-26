<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Personnel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-qGi72ej8oR6L/ax8HtWVHYtk4Jxx6Sqz2OOPLIQsObCPwEnkF+4dEdOnsDS+JM0D" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            height: 50px;
            width: auto;
        }
        .logout {
            color: #ddd;
            text-decoration: none;
            font-size: 18px;
        }
        .accueil {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        .container {
            padding: 50px;
        }
        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 30px;
        }
        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            padding: 20px;
        }
        .table th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="/dash" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout">Déconnexion</button></form>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Gestion du Personnel</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">CIN</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($personnels as $item)
                        <tr>
                            
                            <td>{{$item ->name}}</td>
                            <td>{{$item ->cin}}</td>
                            <td>{{$item ->domaine->name}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm me-2"><i class="fas fa-info-circle"></i> Détail</a>
                                <a href="#" class="btn btn-warning btn-sm me-2"><i class="fas fa-edit"></i> Modifier</a>
                            </td>

                            <td>
                               
                                <form action="/delete/{{$item->id}} " method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                  </form>
                            </td>
                           
                        </tr> @endforeach
                       
                        <!-- Ajoutez ici d'autres lignes pour plus de personnel -->
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
