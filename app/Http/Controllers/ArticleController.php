<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\User;
use App\Http\Requests\articleRequest;
use Illuminate\Http\UploadedFile;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
      $listarticle = Article::all();
      
        return view('article.index' , ['articles' => $listarticle]);
    }
    public function index2(Request $request)
    { $id=$request->input('id_categorie');
      if($id==5){
          $listarticle = Article::all();
      }

      else
      { 
        
        $listarticle = Article::where('id_categorie', $id)->get();
          //$listarticle = Article::find($request->input('id_categorie'));
        
      }
      return view('article.index' , ['articles' => $listarticle]);
    }
    //Afficher le formulaire de creation d'un article
    public function create()
    {
 if (! auth()->check()) {
    
    return redirect('login');
}
       return view('article.create');

    }
    //Enregister un article
    public function store(articleRequest $request)
    {
        $article = new Article();
        
        $article->libele = $request->input('libele');
        $article->art_description = $request->input('art_description');
        $article->id_categorie=$request->input('categorie');
        $article->prix = $request->input('prix');
        $article->prix_seuil = $request->input('prix');
        $article->user_id = Auth::user()->id;
        if($request->hasFile('image')){
            $article->image=$request->image->store('image');
        }
        $article->date_debut      = date('Y-m-d H:i:s');
        $article->date_echeance   = date('Y-m-d H:i:s', strtotime(' + 3 days'));
        $article -> save();
        session()->flash('success', "L'article a été bien enregistré !!");
        return redirect('articles');

    }
    //Recupérer un article puis le mettre dans le formulaire
    public function edit($id)
    {

        $article = Article::find($id);
           $this-> authorize('update',$article);
        return view('article.edit', ['article' => $article]);
    }
    //Permet de modifier un article
    public function update(articleRequest $request, $id)
    {

       $article = Article::find($id);
        
        $article->libele = $request->input('libele');
        $article->art_description = $request->input('art_description');
        $article->id_categorie=$request->input('categorie');
        $article->prix = $request->input('prix');
        
         if($request->hasFile('image')){
            $article->image=$request->image->store('image');
        }


        $article -> save();

  session()->flash('success', "L'article a été mis a jour !!");

        return redirect('articles');

    }
    //Permet de supperimer un article
    public function destroy(Request $request, $id)
    {

  $article = Article::find($id);

 $this-> authorize('delete',$article);

        $article->delete();

 session()->flash('success', "L'article a été supprimé !!");

        return redirect('articles');

    }
    public function show($id){
      $article = Article::find($id);
      
      return view('article.show', ['article' => $article]);
    }
    
}
