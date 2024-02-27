<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/ajouterUser.css') }}">
</head>
<body>
    <div class="header">
        <a href="/gesUsers" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <a href="#" class="logout">Déconnexion</a>
    </div>
    <div class="container-xxl py-5" id="contact">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-5">Ajoutez un nouveau utlisateur</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form action="/admin/ajouterUser" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                                        <label for="name">Nom </label>
                                    </div>
                                </div>
                             
                                <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="tel" class="form-control" name="cin" id="tel" placeholder="CIN">
                                        <label for="text">CIN </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date_naissance" id="email" placeholder="">
                                        <label for="email">Date naissance</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                                        <label for="email">Email</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="departement_id" id="departement" placeholder="">
                                        <label for="emadepartement_id">departement Id</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="password" class="form-control" name="password" id="mdp" placeholder="Mot de passe">
                                        <label for="tel">Mot de passe </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" id="mdpn" placeholder="Confirmer le mot de passe">
                                        <label for="email">Confimrer le mot de passe </label>
                                    </div>
                                </div>
                                
                                
                               
                               
                                
                                
                               
                                <div class="col-12 text-center pt-5">
                                    <button class="btn btn-success rounded-pill py-3 px-5" type="submit">Ajouter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function validmdp(event) {
      event.preventDefault(); 
     
      const mdp = document.getElementById('mdp').value;
      const mdpc = document.getElementById('mdpn').value;
      if (mdpn !== '' && mdp !== ''){ 
        if (mdp === mdpc) {
          document.getElementById('mdpn').classList.add("is-valid");
          
        } else {
          document.getElementById('mdpn').classList.add("is-invalid");
        }
      }
    }

    document.getElementById('mdpn').addEventListener('blur', validmdp);
</script>
</body>
</html>
