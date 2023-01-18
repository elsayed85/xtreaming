<?php

namespace DanPalmieri\LivewireComments\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Comments\Models\Comment;
use DanPalmieri\LivewireComments\Tests\Support\Models\Post;
use DanPalmieri\LivewireComments\Tests\Support\Models\User;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'commentator_id' => User::factory(),
            'commentator_type' => User::class,
            'commentable_id' => Post::factory(),
            'commentable_type' => Post::class,
            'original_text' => 'original comment text',
            'text' => 'comment text',
        ];
    }
}
