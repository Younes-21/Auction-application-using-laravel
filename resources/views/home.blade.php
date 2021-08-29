
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Votre compte a été créer avec succes') }}
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="row justify-content-center"> <a href="{{url('articles')}}" class="btn btn-primary">Articles</a> </div>
<script src="{{ asset('assets/js/main')  }}"></script> 
<script src="{{ asset('assets/js/popper')  }}"></script> 

