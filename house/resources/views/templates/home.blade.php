<div class="row">
	<div class="col-md-12" style="background-image: url(http://placehold.it/1170x320); background-size: 100%; height: 320px"></div>
</div>

<div class="row">
	@foreach($posts as $post)
		<div class="col-md-4">
			<h3><a href="{{ route('properties.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h3>
			
			{!! $post->excerpt_html or $post->body_html !!}
			
			<p>
				Realtor: {{ $post->author->name }}
			</p>
			
		</div>
	@endforeach
</div>