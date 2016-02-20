<?php

namespace house\Templates;

use Carbon\Carbon;
use house\Post;
use Illuminate\View\View;

class PropertiesPostTemplate extends AbstractTemplate
{
    protected $view = 'properties.post';
	
	protected $posts;
	
	public function __construct(Post $posts)
	{
		$this->posts = $posts;
	}
    
    public function prepare(View $view, array $parameters)
    {
        $post = $this->posts->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();
		
		$view->with('post', $post);
    }
}