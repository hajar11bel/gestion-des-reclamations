<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12  loginBox">
                <img class="user" src="assets/user.png" alt="User Image">
                <div class="card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center m3">Connexion</h5>
                        <form  method="POST" action="/dash">
                        @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email"  class="form-control" name="email" placeholder="Your email"
                                        required>
                                    <label for="email">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-fill fs-3 m-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>


                                        Email </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Your password" required>
                                    <label for="password">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-lock-fill fs-3 m-1" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                        </svg>

                                        Mot de passe </label>
                                </div>
                            </div>
                            <div class="mb-3 form-check d-flex justify-content-between">
                                <div class="remember-me  text-black">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label m-2" for="remember">Se souvenir de moi</label>
                                </div>
                                <div class="forgot-password">
                                    <a href="#">Mot de passe oublié ?</a>
                                </div>
                            </div>

                            <button type="submit" class=" w-100">Connexion</button>
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