<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SunuEvent</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ url('/') }}" class="signup-image-link">Revenir á la page d'accueil</a>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
                        <form method="POST" action="{{ route('create.account') }}" class="register-form"
                            id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="first_name" placeholder="Prenom"  value="{{old('first_name')}}"/>
                            </div>
                            @error('first_name')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" placeholder="Nom" /> 
                            </div>
                           @error('last_name')
                           <p style="color:red">{{ $message }}</p>
                           @enderror

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Téléphone" />
                            </div>
                            @error('phone')
                            <p style="color:red">{{ $message }}</p>
                            @enderror

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email" />
                            </div>
                            @error('email')
                           <p style="color:red">{{ $message }}</p>
                           @enderror
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Mot de passe" />
                            </div>
                            @error('password')
                           <p style="color:red">{{ $message }}</p>
                           @enderror
                            <div class="form-group">
                                <label for="re-password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirmer le mot de passe" />
                            </div>
                            @error('password_confirmation')
                           <p style="color:red">{{ $message }}</p>
                           @enderror
                            {{-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> --}}
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Valider" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ url('connecter') }}" class="signup-image-link">Déja un compte</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
