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
                    <form action="/register" method="post">
                        @csrf
                    <header>{{ $create }}</header>
                    <div class="input-field">
                        <input type="text" name="name" class="input @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="name">{{ $name }}</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="username" class="input @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="username">{{ $user }}</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" class="input @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="email">{{ $email }}</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="input @error('password') is-invalid @enderror" id="password" required value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="password">{{ $pass }}</label>
                    </div>
                    <div class="input-field">

                        <input type="submit" class="submit" value="Register">
                    </div>
                    <div class="signin">
                        <span>{{ $login }} <a href="/login">{{ $login2 }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
