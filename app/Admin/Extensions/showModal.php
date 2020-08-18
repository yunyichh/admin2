<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/18
 * Time: 14:45
 */
use Illuminate\Contracts\Support\Renderable;

class showModal implements Renderable
{
    public $url = null;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function render($key = null)
    {
       return modal($this->url);
    }
}