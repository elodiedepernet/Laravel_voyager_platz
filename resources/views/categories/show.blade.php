<!DOCTYPE html>
<html lang="fr">

<!-- VUE DES POSTS D'UNE CATEGORIE -->

@include('template.partials._head')
@include('template.partials._nav')

@section('content')
<section class="work" id="list">

@foreach($categories as $category)


    <h1>Les {{ count($category->posts) }} articles de la catégorie 
        <br/>"{{ $category->name}}"
    </h1>
   
    <!-- Liste des posts de la catégorie -->
    @include('posts.index', ['posts' => $category->posts])



@endforeach


</section>

@stop

@include('template.partials._content')
@include('template.partials._footer')
@include('template.partials._scripts')