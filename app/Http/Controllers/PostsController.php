<?php
    namespace App\Http\Controllers;

    use App\Services\PostsService;
    use Illuminate\Database\Eloquent\ModelNotFoundException;

    class PostsController
    {
        public function __construct(
            private readonly PostsService $postsService
        )
        {}

        public function single(string $slug)
        {
            try {
                $record = $this->postsService->findBySlug($slug);

                if (empty($record))
                    abort(404);

                return view('posts.single', compact('record'));
            } catch (ModelNotFoundException $e)
            {
                abort(404);
            }

        }
    }
