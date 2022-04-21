@section('comments')
<div class="post-reply">
            <div id="title-post-send">
                <hr/><h2>Your comments</h2>
            </div>
        </div>

        <div class="post-reply">
                <div class="image-reply-post"></div>
                    	<div class="name-reply-post">Igor vlademir</div>
                    	<div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
        </div>

        <div class="post-reply-2">
            <div class="image-reply-post-2"></div>
            <div class="name-reply-post-2">Nathan Shaw</div>
            <div class="text-reply-post-2">Well done ! I like the way you did it. Awesome ! </div>
        </div>

        <div class="post-send">
            <div id="main-post-send">
                <div id="title-post-send">Add your comment</div>
				<form id="contact" method="post" action="/onclickprod/formsubmit_op.asp">
    				<fieldset>
					<p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
					</fieldset>
			        <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
  				</form>
            </div>
		</div>
@endsection