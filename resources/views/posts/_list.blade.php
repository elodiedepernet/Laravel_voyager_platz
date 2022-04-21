<!-- 
    /ressources/views/posts/_list.blade.php 
    Description : Boucle foreach de la liste des posts 
-->


@foreach($posts as $post)
<section class="work">
  <div class="post-preview">
    <figure class="white">
      <a href="{{ route('posts.show', [
         'post' => $post->id,
          'slug' => \Illuminate\Support\Str::slug($post->title)
          ]) }}">
                        
      <img src="{{ asset('storage/' . $post->image) }}" class="w-100">
        <dl>
          <dt>{{ $post->title }}</dt>
          <dd>{{ $post->excerpt }}</dd>
        </dl> 
      <div id="wrapper-part-info">                    
          @if ($post->category)
            <div class="part-info-image"><img src="{{ asset('storage/' . $post->category->image) }}"></div>
            <div id="part-info">{{ $post->category->name }}</div>
          @endif
      </div>                            
    </figure>
  </div>
</section>                      
 @endforeach