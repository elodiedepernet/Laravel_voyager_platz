<div class="pt-5 mt-5">
    <h3 class="mb-5">{{ count($comments) }} Comments</h3>
    <ul class="comment-list">
        @foreach($comments as $comment)
            <li class="comment">
                <div class="comment-body">
                <h3>{{ $comment->pseudo }}</h3>
                <div class="meta mb-3">
                    {{ $comment->created_at->format('M d, Y \a\t h:m') }}
                </div>
                <p>{{ $comment->content }}</p>
                </div>
            </li>
        @endforeach
      

        </ul>
    
  </div>