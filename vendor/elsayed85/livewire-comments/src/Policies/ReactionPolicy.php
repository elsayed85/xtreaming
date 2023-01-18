<?php

namespace DanPalmieri\LivewireComments\Policies;

use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Concerns\Interfaces\CanComment;
use Spatie\Comments\Models\Reaction;

class ReactionPolicy
{
    /**
     * @param CanComment|Model $commentator
     * @param Model $commentableModel
     *
     * @return bool
     */
    public function delete(Model $commentator, Reaction $reaction): bool
    {
        return $reaction->madeBy($commentator);
    }
}
