@foreach($posts as $post)
	<article class="col-md-4">
		<h4><a href="{{ route('properties.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h4>
		<p>
			Realtor: {{ $post->author->name }} 
		</p>
		
		{!! $post->excerpt_html or $post->body_html !!}
	</article>
	
@endforeach

{!! $posts->render() !!}

