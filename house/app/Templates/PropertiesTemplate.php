<?php

namespace house\Templates;

use Carbon\Carbon;
use house\Post;
use Illuminate\View\View;

class PropertiesTemplate extends AbstractTemplate
{
    protected $view = 'properties';
	
	protected $posts;
	
	public function __construct(Post $posts)
	{
		$this->posts = $posts;
	}
    
    public function prepare(View $view, array $parameters)
    {
        $posts = $this->posts->with('author')
							 ->where('published_at', '<', Carbon::now())
							 ->orderBy('published_at', 'desc')
							 ->paginate(9);
		
		$view->with('posts', $posts);
    }
}