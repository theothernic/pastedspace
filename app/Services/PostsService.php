<?php
    namespace App\Services;


    use App\Models\Post;
    use App\Models\PostDto;
    use Illuminate\Support\Carbon;

    class PostsService
    {

        public function findBySlug(string $slug) : PostDto
        {

            $data = Post::where('slug', $slug)->with('author')->firstOrFail();

            $record = new PostDto();
            $record->slug = $slug;
            $record->title = $data->title;
            $record->author = $data->author->name;
            $record->content = $data->body;
            $record->post_at = $data->post_at;
            $record->tz = $data->author->tz;

            return $record;
        }
    }
