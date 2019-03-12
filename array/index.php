<?php

// Show all information, defaults to INFO_ALL
phpinfo();


class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title     = $title;
        $this->author    = $author;
        $this->published = $published;
    }

}


$posts = [
    new Post('My First Post', 'jl',true),
    new Post('My Second Post', 'jl',true),
    new Post('My Third Post', 'at',true),
    new Post('My Fourth Post', 'ai',false),
];


//$unpublishedPosts= array_filter($posts,function($post){
//    return !$post->published;
//});
//
//$publishedPosts= array_filter($posts,function($post){
//    return $post->published;
//});
//
//var_dump($unpublishedPosts);
//
//var_dump($publishedPosts);

//foreach ($posts as $post){
//    $post->published = true;
//}

//$modified=array_map(function ($post) {
//    $post->published = true;//this will set every post published set to true
//    return $post;
//}, $posts);


//$modified=array_map(function ($post) {
//    return (array) $post;//cast the object to array
//}, $posts);


//$modified=array_map(function ($post) {
//    return ['name'=>$post->title];//get a subset of post and return an array
//}, $posts);
//
//var_dump($modified);


$posts = array_map(function ($post) {
    return (array)$post;//accept the collection of posts and convert to an array version of posts
}, $posts);

//alternative way of above using array_map to convert an objects of array to an arrays of array, here convert each object in this array to an array.
//foreach ($posts as $index=>$post){
//    $posts[$index] = (array)$post;
//}

//
//
//$titles = array_column($posts, 'title');//this is different with the tutorial, can not fetch the public property of object, so convert posts to array and fetcch the key of array
//
//var_dump($titles);
//

$authors = array_column($posts, 'author','title');//this is different with the tutorial, can not access the property of object, must convert posts to array

var_dump($authors);