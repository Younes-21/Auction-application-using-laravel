@extends('layouts.master')


@section('content')

<!-- Top -->

<div id="top">
    
    <div class="shell">
        
        <!-- Header -->
        
        <!-- End Header -->
        
        <!-- Slider -->
        <div id="slider">
            <div id="slider-holder">

                <div class="jcarousel-container jcarousel-container-horizontal" style="display: block;">
                    <div class="jcarousel-clip jcarousel-clip-horizontal">
                        <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 5880px; right: 30px;">

                            <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="">
                                <a href="#">
                                    <center><img src="{{ asset('assets/image/100.jpg')  }} "style="width:85%; height: 500px;padding-top: 25px; margin-bottom: 25px;" ></center>
                                </a>
                            </li>

                            <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="">
                                <a href="#">
                                    <center><img src="{{ asset('assets/image/200.jpg')  }} " style="height:500px ; width: 800px;padding-top: 25px; margin-bottom: 25px;"  ></center>
                                </a>
                            </li>


                            <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="">
                                <a href="#">
                                    <center><img src="{{ asset('assets/image/300.jpg')}}"style="height:100% ; width: 80%;padding-top: 25px; margin-bottom: 25px;">
                                    </center>
                                </a>
                            </li>

                            <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="">
                                <a href="#">
                                    <center><img src="{{ asset('assets/image/100.jpg')  }} "style="" >
                                    </center>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <div id="slider-nav">
                <a href="#" class="prev">Previous</a>
                <a href="#" class="next">Next</a>
            </div>
        </div>
        <!-- End Slider -->
        
    </div>
</div>
    
<!-- Main -->

<div id="main">

    <div class="shell">
        <br><br><br>
        <div class="s012">
                  <form action="{{ url('articles/categorie') }}" method="get">
                    
                  <div class="inner-form">
                        
                      <div class="main-form" id="main-form">
                          <div class="row">
                            {{ csrf_field() }}

                                <center><h3 style="color: white ;padding-top: 6px;">Veuillez choisir votre categorie</h3></center>
                                <div style="min-height: 5px; padding-top: 5px;"></div>
                                
                                <table>
                                    <tr>
                                        <th><select style="color: black;" class="form-select" aria-label="Default select example" name="id_categorie">
                                          <option value="5" >Tout</option>
                                          <option value="1" >Bijoux et Accessoire</option>
                                          <option value="2" >Vehicule</option>
                                          <option value="3" >Materiels et Meubles</option>
                                          <option value="4" >Sport</option>
                                        </select></th>

                                        <th><div class="row last" style="padding-top: 14px;padding-left: 50px;">
                                          <input type="submit" class="field" style="width: 150px;height: 30px; background-color: #F0B849" value="Chercher">

                                        </div></th>
                                    </tr>
                                </table>
                                
                          </div>
                      </div>
                  </div>
                  </form>
            </div>
        <!-- Content -->
        <div id="content">
            
            <!-- Categorie -->

            
            <!-- Fin Categorie -->
            
            <div class="tabs">
        <ul>
            <li><a href="#"class=""><span>Articles</span></a></li>
        </ul>
      </div>
            
            <!-- Container -->
            <div id="container">
                
                    
                <div class="tabbed">

                    
                    @foreach($articles as $article)
                        @if( ($article->date_echeance) > date('Y-m-d') )

                        <!-- First Tab Content -->
                    <div class="" style="display: block;margin-left:30px;padding-right: 5px;">
                        <div class="items">
    
                            
                            <ul>
                                <li>
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('storage/'.$article->image) }}" style="width: 100%;height: 110px;"></a>
                                    </div>
                                    <p>
                                        Libele: <span>{{ $article->libele }}</span><br>
                                        Date de fin : <span>{{ $article->date_echeance }}</span><br>
                                        Categorie:  <a href="">
                                                        @if( ($article->id_categorie) == 1 )
                                                            Bijoux et Accessoire
                                                        @endif
                                                        @if( ($article->id_categorie) == 2 )
                                                            Véhicule
                                                        @endif
                                                        @if( ($article->id_categorie) == 3 )
                                                            Materiels et Meubles
                                                        @endif
                                                        @if( ($article->id_categorie) == 4 )
                                                            Sport
                                                        @endif
                                                    </a>
                                    </p>
                                    <p class="price">
                                        Prix: <strong>{{ $article->prix_seuil }} MAD</strong>
                                    </p>

                                    <p>
                                        <form action="{{ url('articles/'.$article->id) }}"  method="post">
                                            
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <?php if (Auth::user() and Auth::user()->id !=$article->user_id)
                                            {
                                            ?>    <a href="{{ url('articles/encherir/'.$article->id) }}" class="">Encherir</a>&nbsp&nbsp
                                            <?php
                                            }    elseif (!Auth()->check()) {
                                            ?>    <a href="{{ url('articles/encherir/'.$article->id) }}" class="">Encherir</a>&nbsp&nbsp
                                            <?php
                                            }
                                            ?>
                                            
                                            <a href="{{ url('articles/'.$article->id) }}" class="">Details</a>&nbsp&nbsp

                                            @can('update', $article)
                                            <a href="{{ url('articles/'.$article->id.'/edit') }}" class="">Editer</a>&nbsp&nbsp
                                            @endcan

     
                                            @can('delete', $article)
                                            <button type="submit" class="" style="color: #920101 ;border:none;">Supprimer</button>
                                            @endcan
                                        </form>
                                    </p>

                                </li>
                            </ul>
                        </div>
                    </div>
                    @else

 

                        <!-- First Tab Content -->
                    <div class="" style="display: block;margin-left:30px;padding-right: 5px;">
                        <div class="items">
    
                            
                            <ul>
                                <li>
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('storage/'.$article->image) }}" style="width: 100%;height: 110px;"></a>
                                    </div>
                                    <p>
                                        <b>Libele:</b> <span style="color: grey">{{ $article->libele }}</span><br>
                                        <b>Date de fin :</b> <span style="color: grey">{{ $article->date_echeance }}</span><br>
                                        <b>Categorie:</b>  <a href="" style="color: grey">
                                                        @if( ($article->id_categorie) == 1 )
                                                            Bijoux et Accessoire
                                                        @endif
                                                        @if( ($article->id_categorie) == 2 )
                                                            Véhicule
                                                        @endif
                                                        @if( ($article->id_categorie) == 3 )
                                                            Materiels et Meubles
                                                        @endif
                                                        @if( ($article->id_categorie) == 4 )
                                                            Sport
                                                        @endif
                                                    </a>
                                    </p>
                                    <p class="price">
                                        <b>Prix</b>: <strong style="text-decoration:line-through;color: grey">{{ $article->prix_seuil }} MAD</strong>
                                    </p>

 

                                    <p>
                                        <b><h6 style="border:1px dotted black;color: grey">Produit expiré</h6></b>
                                    </p>

 

                                </li>
                            </ul>
                        </div>
                    </div>
                        @endif
                        @endforeach

                    
                        

                            <div class="cl">&nbsp;</div>
                </div>
            </div>

                    <!-- End Third Tab Content -->
                    
        </div>

                
                <!-- Footer -->
                
                <!-- End Footer -->
                
            </div>
            <!-- End Container -->
            
        </div>
        <!-- End Content -->
        

<!-- End Main -->
    

@endsection