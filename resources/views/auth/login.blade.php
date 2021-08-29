<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-12 col-lg-10">
<div class="wrap d-md-flex">
<div class="img" style="background-image:url(assets/image/ttt.jpg)">
</div>
<div class="login-wrap p-4 p-md-5">
<div class="d-flex">
<div class="w-100">
<h3 class="mb-4">Se connecter</h3>
</div>
<div class="w-100">
<p class="social-media d-flex justify-content-end">
<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
</p>
</div>
</div>
<form action="{{ route('login') }}" method="POST"class="signin-form">
     @csrf
<div class="form-group mb-3">
<label class="label" for="name">Adresse Mail</label>
 <input id="email" type="email" placeholder="Veuillez saisir votre adresse mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

</div>
<div class="form-group mb-3">
<label class="label" for="password">Mot de passe</label>
<input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="form-group">

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublie ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
</div>
<div class="form-group d-md-flex">
<div class="w-50 text-left">

     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

<span class="checkmark"></span>
</label>
</div>

</div>

</form>
<p class="text-center">Vous n'avez pas de compte? <a data-toggle="tab" href="{{url('register')}}">Inscrivez-vous</a></p>
</div>
</div>
</div>

</div>
</div>
</section>

<script src="{{ asset('assets/js/main')  }}"></script> 
<script src="{{ asset('assets/js/popper')  }}"></script> 
