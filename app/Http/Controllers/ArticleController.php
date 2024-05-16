<?php

namespace App\Http\Controllers;

use id;
use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller implements HasMiddleware 
    {
        public static function middleware()
    {
        return [
            new Middleware('auth' , except:['index' , 'show']),

        ];
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at' , 'desc')->get();
        return view('article.index' , compact('articles'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->orderby('created_at' , 'desc')->get();
        return view('article.by-category' , compact('category' , 'articles'));
    }

    public function byUser(User $user)
    {
        $articles = $user->articles()->orderby('created_at' , 'desc')->get();
        return view('article.by-user' , compact('user' , 'articles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:article|min:5',
            'subtitle'=> 'required|min:5',
            'body'=> 'required|min:10',
            'image'=>'image|required',
            'category'=>'required',
        ]);

        $article = Article::create([
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'image'=>$request->file('image')->store('public/images'),
            'category_id'=> $request->category,
            'user_id' => Auth::user()->id,
        ])
        
        return redirect(route('homepage'))->with('messsage' , 'Articolo creato correttamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        retun view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
