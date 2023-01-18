<?php

namespace DanPalmieri\LivewireComments\Policies;

use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Comment;
use Spatie\Comments\Models\Concerns\Interfaces\CanComment;

class CommentPolicy
{
    /**
     * @param CanComment|Model $commentator
     * @param Model $commentableModel
     *
     * @return bool
     */
    public function create(?CanComment $user): bool
    {
        return true;
    }

    /**
     * @param CanComment|Model $commentator
     * @param Model $commentableModel
     *
     * @return bool
     */
    public function update(?CanComment $user, Comment $comment): bool
    {
        if ($comment->getApprovingUsers()->contains($user)) {
            return true;
        }

        return $comment->madeBy($user);
    }

    /**
     * @param CanComment|Model $commentator
     * @param Model $commentableModel
     *
     * @return bool
     */
    public function delete(?CanComment $user, Comment $comment): bool
    {
        if ($comment->getApprovingUsers()->contains($user)) {
            return true;
        }

        return $comment->madeBy($user);
    }

    /**
     * @param CanComment|Model $commentator
     * @param Model $commentableModel
     *
     * @return bool
     */
    public function react(CanComment $user, Model $commentableModel): bool
    {
        return true;
    }

    public function see(?CanComment $user, Comment $comment): bool
    {
        if ($comment->isApproved()) {
            return true;
        }

        if (! $user) {
            return false;
        }

        if ($comment->madeBy($user)) {
            return true;
        }

        return $comment->getApprovingUsers()->contains($user);
    }

    public function approve(CanComment $user, Comment $comment): bool
    {
        return $comment->getApprovingUsers()->contains($user);
    }

    public function reject(CanComment $user, Comment $comment): bool
    {
        return $comment->getApprovingUsers()->contains($user);
    }
}
