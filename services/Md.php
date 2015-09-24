<?php

use cebe\markdown\GithubMarkdown;

class Md extends GithubMarkdown
{
    public $config;
    function __construct()
    {
        $this->config = require BASE_PATH.'/config/markdown.php';
    }
    public static function parsemd($markdown){
        $parse = new GithubMarkdown();
        return $parse->parse($markdown);
    }

}
