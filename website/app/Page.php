<?php

namespace website;

use Baum\Node;

class Page extends Node
{
    protected $fillable = ['title', 'name', 'uri', 'content', 'template'];
    
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value ?: null;
    }
    
    public function setTemplateAttribute($value)
    {
        $this->attributes['template'] = $value ?: null;
    }
}
