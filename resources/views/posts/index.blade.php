<!-- 
/ressources/views/posts/index.blade.php
Description: Index de la Liste des posts 
-->

@section('content')
<div>
@include('posts._list', ['posts' => $posts])
</div>

<div id="wrapper-oldnew">
      <div class="oldnew">
        	<div class="wrapper-oldnew-prev">
         
            	<a id="oldnew-prev" data-url="{{ route('ajax.posts.more') }}"></a>
        	</div>
      </div>
	</div>

  @section('scripts')
  <script>
    let offset = 10;
    $('#oldnew-prev').click(function(e) {
      e.preventDefault();
      $.get($(this).data('url'), {offset: offset})
       .done(function(rep) {
         $('#list').append(rep)
                   .find('.col-md-6:nth-last-of-type(-n+10)')
                   .addClass('fadeInUp')
                   .addClass('ftco-animated');
          offset = offset + 10;
       });
    });

  </script>
@endsection

