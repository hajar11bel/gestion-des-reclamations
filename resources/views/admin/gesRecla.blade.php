<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réclamations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-qGi72ej8oR6L/ax8HtWVHYtk4Jxx6Sqz2OOPLIQsObCPwEnkF+4dEdOnsDS+JM0D" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/gesReacla.css') }}">
</head>

<body>
    <div class="header">
        <a href="/dash" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{/admin/logout" method="POST">
            @csrf
            <button class="logout" style="background-color: #333;border:none">Déconnexion</button>
        </form>
    </div>

    <div class="container mt-5 bg-white">
        <h1 class="mb-4">Gestion des Réclamations</h1>

        @if($msg = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$msg}}
          </div>
        @endif

        <div class="row mt-5">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover  mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">Réclamation</th>
                            <th scope="col">Id de Utilisateur</th>
                            <th scope="col">Affecter à</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reclamations as $item)
                        <tr>
                            <td>{{$item->message}}</td>

                            <td>{{$item->id}}</td>
                            <td>
                                <form action="/admin/updateP/{{$item->id}}   " method="POST">
                                    @csrf
                                    @method('PUT')
                                        
                                    <select class="form-select select-personnel" name="personnel_id" value="{{ $item->personnel_id }}">
                                        @foreach($personnels as $personnel)

                                        <option value="{{$personnel->id}}" {{$item->personnel_id == $personnel->name ? 'selected' : ''}}>{{$personnel->name}}</option>

                                        @endforeach
                                    </select>
                                    
                                   
                                        
                                    <button type="submit">affecter</button>
                            </td>
</form>
                            <td>

                                <form action="/delete/{{$item->id}} " method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        <!-- Ajoutez ici d'autres lignes pour plus de réclamations -->
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