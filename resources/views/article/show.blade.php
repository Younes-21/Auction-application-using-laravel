@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles1.css') }}">

 <body>
        
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/'.$article->image) }}" alt="..."></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder" style="color: black;">{{ $article->libele }}</h1>
                        <div class="fs-5 mb-5">
                            <h5 style="color: black;"> <b>prix actuel : </b> 
                                             <span>{{ $article->prix_seuil }}MAD
                                            </span>
                                        </h5>
                        </div>
                        <p>
                                        <b>Date de fin : </b><span>{{ $article->date_echeance }}</span><br>
                                        <strong>Categorie:</strong>  
                                                        @if( ($article->id_categorie) == 1 )
                                                            Bijoux et Accessoire
                                                        @endif
                                                        @if( ($article->id_categorie) == 2 )
                                                            Véhicule
                                                        @endif
                                                        @if( ($article->id_categorie) == 3 )                                                          Materiels et Meubles
                                                        @endif
                                                        @if( ($article->id_categorie) == 4 )
                                                            Sport
                                                        @endif
                                                    
                                    </p>
                        
                        <p class="lead">{{ $article->art_description }}</p>
                        <div class="d-flex">
                           
                                        <form action="{{ url('articles/'.$article->id) }}" method="post">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
 
                                        <?php if (Auth::user() and Auth::user()->id !=$article->user_id)
                                            {
                                            ?>    <a href="{{ url('articles/encherir/'.$article->id) }}" class="btn btn-outline-dark flex-shrink-0 ">Encherir</a>&nbsp&nbsp
                                            <?php
                                            }    elseif (!Auth()->check()) {
                                            ?>    <a href="{{ url('articles/encherir/'.$article->id) }}" class="">Encherir</a>&nbsp&nbsp
                                            <?php
                                            }
                                            ?>
                                          @can('update',$article)
                                        <a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-outline-dark flex-shrink-0">Editer</a>
                                            @endcan
                                         @can('delete',$article)
                                        <button type="submit" class="btn btn-outline-dark flex-shrink-0">Supprimer</button>
                                        @endcan
                                    </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>
<script src="{{ asset('assets/js/scripts1')  }}"></script> 
@endsection