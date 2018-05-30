<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>studydrive</title>

    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to StudyDrive</h1>
                <p class="lead">This is a simple login/registration page.</p>
                <hr class="my-4">
                <p>If you are new to studydrive please enter your email, you will get registration link to your email.</p>
            </div>
        </div>

        @yield('content');

    </body>
</html>
