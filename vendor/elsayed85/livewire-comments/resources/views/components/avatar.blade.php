@php
    $defaultAvatar = 'https://www.gravatar.com/avatar/unknown?d=mp';

    if ($user = auth()->user()) {
        $segment = md5(strtolower($user->email));
        $defaultAvatar = "https://www.gravatar.com/avatar/{$segment}?d=mp";
    }
@endphp

<a style="margin-right: var(--comments-avatar-margin);" @if(isset($comment) && $url = $comment->commentatorProperties()?->url) href="{{ $url }}" @endif>
    <img
        class="comments-avatar"
        src="{{ isset($comment) &&  $comment->commentatorProperties() ? $comment->commentatorProperties()->avatar : $defaultAvatar }}"
        alt="avatar"
    >
</a>
