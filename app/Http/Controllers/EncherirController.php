<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\Encherir;
use App\Http\Requests\articleRequest;
use Illuminate\Http\UploadedFile;
use Auth;
class EncherirController extends Controller
{
    public function enche($id) {
       
    
        if (! auth()->check()) {
    
    return redirect('login');
}
        $encherir = new Encherir();
       $article = Article::find($id);
        $article->prix_seuil=$article->prix_seuil+$article->prix_seuil*0.1;
        $encherir->id_enchereur = Auth::user()->id;
        $encherir->id_article = $id;
        $encherir->prix_encherir=$article->prix_seuil;
        //echo "encherir->id_enchereur = ".$encherir->id_enchereur."encherir->id_article".$encherir->id_article."encherir->prix_encherir = ".$encherir->prix_encherir." article->prix_seuil = ".$article->prix_seuil;
        $encherir->date_encherir = date('Y-m-d H:i:s');
        $article -> save();
        $encherir -> save();
        return back();
    


    }
}
