<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('Css/Register.css') }}">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.bunny.net">
 <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

 <!-- Scripts -->
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="">

        <div class="">
            <div class="row ">
                <div class="col-sm-6 body2">
                    <h1 class="h1" style="color:#ffff99; font-size: 90px;font-weight: bold; margin:50px" >Inscrivez-vous sur QuizTime !</h1>
                    <p class="text-white" style="font-size: 25px;margin-top:50px;margin-left:50px ; width:500px;">Prêt à rejoindre la communauté des apprenants? Remplissez ce formulaire pour créer votre compte. Accédez ensuite à une multitude de quiz passionnants pour enrichir vos connaissances. L'aventure commence ici!</p> <br>
                     <p style=" margin-left:50px;color:#c1bfbf">Vous avez déjà un compte? Connectez-vous ici</p>
                     <form action="{{ route('loginn') }}" method="get">
                        @csrf

                        <button class="mybtn" type="submit">Connexion</button>
                        </form>
                </div>
                <div class="col-sm-1 ">
                    <div class="waves">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="white" fill-opacity="1" d="M0,192L20,208C40,224,80,256,120,266.7C160,277,200,267,240,240C280,213,320,171,360,154.7C400,139,440,149,480,144C520,139,560,117,600,144C640,171,680,245,720,234.7C760,224,800,128,840,128C880,128,920,224,960,256C1000,288,1040,256,1080,250.7C1120,245,1160,267,1200,229.3C1240,192,1280,96,1320,101.3C1360,107,1400,213,1420,266.7L1440,320L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
                          </svg>
                    </div>
                </div>
                <div class="col-sm-5 login">
                    <div class="">
                        <div class="logintitle">{{ __('Inscription') }}</div>

                        <div class="form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row innputs">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" placeholder="Nom" type="text" class="form-control    bg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row  innputs">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __(' Address Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" placeholder="Email" type="email" class="form-control    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row  innputs">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password " placeholder="Mot de passe" class="form-control   bg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row  innputs">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" placeholder="Confirmer" class="form-control   bg" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="mybtn2">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
