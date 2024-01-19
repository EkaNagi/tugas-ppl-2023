<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/{{ $css }}">
    <link rel="icon" href="{{ url('/favicon.ico') }}">
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
                    <p>{{ $text }} <i> {{ $text2 }}</i></p>
                </div>

            </div>

            <div class="col-md-6 right">

                <div class="input-box">
                <form action="/login" method="post">
                    @csrf
                    <header>{{ $login }}</header>
                    @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    <div class="input-field">
                        <input type="text" name="username" class="input @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                        <label for="username">{{ $user }}</label>
                    </div>
                    <div class="input-field">
                        <input type="password"  name="password" class="input" id="password" required>
                        <label for="password">{{ $pass }}</label>
                    </div>
                    <div class="input-field">

                        <input type="submit" class="submit" value="Login"><a href="/dashboard"></a>
                    </div>
                    <div class="signin">
                        <span>{{ $register }} <a href="/register">{{ $register2 }}</a></span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
