@extends('layouts.master')


@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
  <img src="{{ asset('storage/'.$article->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{ $article->libele }}</p>
    <br>
    <h50>Description :{{$article->art_description}}
                                     	<br>
    <p class="card-text">prix initial :{{ $article->prix }}</p>
    <p class="card-text">prix actuel :{{ $article->prix_seuil }}</p>
                                    <p>
                                   <form action="{{ url('articles/'.$article->id) }}" method="post">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
 
 
                                        <a href="{{url('articles/encherir/'.$article->id)}}" class="btn btn-primary">Encherir</a>
                                      
                                         @can('delete',$article)
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                        @endcan
                                    </form>
                                
                                </p>

  </div>
</div>
   

 

<script src="{{ asset('assets/js/jquery.min.js')  }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.')  }}"></script>         

@endsection