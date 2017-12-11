<?php

namespace App\Models;

/**
 *
 */
class Post
{
    public $title;
    public $published;
    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('My post 1', true),
    new Post('My post 2', false),
    new Post('My post 3', true),
    new Post('My post 4', false),
    new Post('My post 5', true),
];

// dd($post);
/*$unpublishedPost = array_filter($post, function ($post) {
return $post->published == false;
});
$publishedPost = array_filter($post, function ($post) {
return $post->published == true;
});
dd($publishedPost);
 */
/*$changePublication = array_map(function ($post) {
return $post->title;
}, $post);
dd($changePublication);
 */

$title = array_column($posts, 'title');
dd($title);
