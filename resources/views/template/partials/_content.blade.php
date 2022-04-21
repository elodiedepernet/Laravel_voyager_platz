<hr>
      <div id="wrapper-container">

        <div class="container object">

          <div id="main-container-image">

          @include('posts.index', [
                    'posts' => \App\Models\Post::orderBy('created_at')
                                                ->take(20)
                                                ->get()
                    ])

          </div>
        </div>
    </div>

<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
    	</div>
</div>

