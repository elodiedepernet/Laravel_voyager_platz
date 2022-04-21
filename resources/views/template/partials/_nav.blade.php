<!-- Navigation -->
<!-- NAVBAR -->
<nav>
<div id="wrapper-navbar">
		<div class="navbar object">

            <div id="wrapper-bouton-icon">
          		@foreach($categories as $category)
				<div id="bouton-ai">
					<a href="{{ route('categories.show', [
						'category' => $category->id,
						'slug' => Illuminate\Support\Str::slug($category->name)
						]) }} ">
					 <img src="{{ asset('storage/' . $category->image) }}" alt=" {{$category->Title}}">
					</a>	 
				</div>
				@endforeach
			</div>
    	</div>
    </div>	
        </div>
      </div>
    </nav>