<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/{{ $css }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }} | ManyChance</title>
</head>
<body>
<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">

                <!-------------      LOGO     ------------->

                <img src="img/{{ $logo }}" alt="">
                <div class="text">
                    <p>Join the community of developers <i>- ludiflex</i></p>
                </div>

            </div>

            <div class="col-md-6 right">

                <div class="input-box">

                    <header>{{ $login }}</header>
                    <div class="input-field">
                        <input type="text" class="input" id="username" required="" autocomplete="off">
                        <label for="username">{{ $user }}</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="password" required="">
                        <label for="password">{{ $pass }}</label>
                    </div>
                    <div class="input-field">

                        <input type="submit" class="submit" value="Login">
                    </div>
                    <div class="signin">
                        <span>{{ $register }} <a href="/register">{{ $register2 }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
