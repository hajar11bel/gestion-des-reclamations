<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/admin/registre" method="POST">
        @csrf
        name: <input type="text" name="name" id=""><br>
        email: <input type="email" name="email" id=""><br>
        password: <input type="password" name="password" id=""><br>
        cin: <input type="number" name="cin" id=""><br>
        date naissance: <input type="date" name="date_naissance" id="">

        <input type="submit" value="submit">

    </form>
    <footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
</body>
</html>