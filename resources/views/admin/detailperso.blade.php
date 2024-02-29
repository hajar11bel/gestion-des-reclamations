<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/detail.Perso.css') }}">
</head>
<body>
    <div class="header">
        <a href="/gesPerso" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="/admin/logout " method="POST">
            @csrf
        <button class="logout" style="background-color: #333; border:none;">Déconnexion</button></form>
    </div>
    </div>
    <div class="container-xxl py-5" id="contact">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-5">{{$personnel->name}} </h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form action="/detailperso/{id}">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nom" disabled value="{{$personnel->name}}">
                                        <label for="name">Nom </label>
                                    </div>
                                </div>
                             
                                <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="tel" class="form-control" id="tel" placeholder="CIN" disabled value="{{$personnel->cin}}">
                                        <label for="tel">CIN </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="date" placeholder="" disabled value="{{$personnel->date_naissance}}">
                                        <label for="date">Date naissance</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="" disabled value="{{$personnel->email}}">
                                        <label for="email">email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="domaine" placeholder="" disabled value="{{$personnel->domaine_id}}">
                                        <label for="domaine">Domaine ID</label>
                                    </div>
                                </div>

                                
                                
                                
                               
                               
                                
                                
                               
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
</body>
</html>
