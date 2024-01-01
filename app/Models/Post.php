<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Str;

    class Post extends Model
    {
        use HasUuids;

        public $incrementing = false;
        protected $fillable = [
            'author_id',
            'slug',
            'title',
            'body',
            'post_at'
        ];

        protected $casts = [
            'post_at' => 'datetime'
        ];


        public function author() : BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public static function boot() : void
        {
            parent::boot();

            self::creating(function (Model $model) {
                if (empty($model->slug))
                    $model->slug = Str::slug($model->title);
            });
        }

    }
