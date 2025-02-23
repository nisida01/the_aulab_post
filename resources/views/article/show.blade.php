<x-layout>
    <div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Titolo : {{ $article->title}}
            </h1>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
          
            <div class="col-12 col-md-8 ">
                <img src="{{Storage::url($article->image) }}" alt="" class="omg-fluid my-3">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/y') }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $article->body }}</p>
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="btn btn-info text-white my-5">Torna indietro</a>
                </div>
            </div>
      
        </div>
    </div>
