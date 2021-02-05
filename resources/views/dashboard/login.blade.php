<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/login.css') }}">
    <title>Document</title>
</head>

<body class="text-center vw-100 vh-100 d-flex justify-content-center align-items-center">

    <main class="container w-25">

        <form action="{{ route('dashboard.auth.login') }}" method="post" class="form-signin">

            @csrf

            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
                height="72">

            <h1 class="h3 mb-3 font-weight-normal">Informe os dados para acessar</h1>

            @error('login-error')
                    
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

            @enderror

            <label for="email" class="sr-only">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Endereço de e-mail"
                value="{{ old('email') }}" autofocus>

                @error('email')
                    
                    <div class="error text-danger">
                        {{ $message }}
                    </div>

                @enderror

            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Senha"
                value="{{ old('password') }}">

                @error('password')
                    
                    <div class="error text-danger">
                        {{ $message }}
                    </div>

                @enderror

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="true"> lembre-se de mim
                </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

        </form>

    </main>

    <script src="{{ asset('dashboard/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.js') }}"></script>

</body>

</html>
