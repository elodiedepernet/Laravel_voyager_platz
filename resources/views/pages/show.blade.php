
@extends('template.index')


<hr>
      <div id="wrapper-container">

        <div class="container object">

          <div id="main-container-image">

        <!--  
            Ici vient le contenu additionnel 
            switch et 2 include
            Attention vous aurez besoin du \App\Models\Post
        -->
        <!-- Si on est sur la page 1 : on insère les posts -->
        <!-- Si on est sur la page 3 : on insère le formulaire de contact -->
        @switch('Route')
            @case(\home)
                @include('posts._index', [
                    'posts' => \App\Models\Post::orderBy('datePublication', 'desc')
                                                ->take(20)
                                                ->get()
                    ])
                @break
            @case(categories.show')
                @include('template.partials._contactForm')
                @break
        @endswitch
        
          </div>
        </div>
    </div>
