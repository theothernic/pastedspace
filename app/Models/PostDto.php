<?php
    namespace App\Models;


    use Illuminate\Support\Carbon;

    class PostDto
    {
        public string $slug;
        public string $title;
        public string $author;
        public string $content;
        public Carbon $post_at;
        public string $tz;
    }
