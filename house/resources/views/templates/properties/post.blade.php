<article>
	<h2>{{ $post->title }}</h2>
	<p>
		Realtor: {{ $post->author->name }} <br> Date Available: {{ $post->published_date }}
	</p>
	
	{!! $post->body_html !!}
</article>