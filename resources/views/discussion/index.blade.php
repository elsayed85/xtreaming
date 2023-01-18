@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="app-section">
            <div class="mb-3">
                <div class="text-24 text-white font-weight-bold">Discussions</div>
                <div class="subtext">You can open and discuss TV Series, Movies or General topics.</div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex align-items-center forum-filter">
                    </div>
                    <div class="list-forum">
                        <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                            <div class="avatar" style="">W</div>
                        </a>
                        <div class="flex-fill">
                            <div class="list-footer">
                                <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                    admin</a>,
                                5 month ago
                            </div>
                            <a href="https://demo.codelug.com/wovie/discussion/ddd-6">
                                <div class="name">
                                    ddd </div>
                                <div class="desc">
                                    ddddd </div>
                            </a>
                        </div>
                        <div class="list-forum-comment">
                            <span class="count">2</span>
                            <span class="text">Reply</span>
                        </div>
                    </div>
                    <div class="list-forum">
                        <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                            <div class="avatar" style="">W</div>
                        </a>
                        <div class="flex-fill">
                            <div class="list-footer">
                                <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                    admin</a>,
                                5 month ago
                            </div>
                            <a href="https://demo.codelug.com/wovie/discussion/1111111111-5">
                                <div class="name">
                                    1111111111 </div>
                                <div class="desc">
                                    11111111111111 </div>
                            </a>
                        </div>
                        <div class="list-forum-comment">
                            <span class="count">0</span>
                            <span class="text">Reply</span>
                        </div>
                    </div>
                    <div class="list-forum">
                        <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                            <div class="avatar" style="">W</div>
                        </a>
                        <div class="flex-fill">
                            <div class="list-footer">
                                <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                    admin</a>,
                                5 month ago
                            </div>
                            <a href="https://demo.codelug.com/wovie/discussion/title-4">
                                <div class="name">
                                    Title </div>
                                <div class="desc">
                                    Dedc </div>
                            </a>
                        </div>
                        <div class="list-forum-comment">
                            <span class="count">0</span>
                            <span class="text">Reply</span>
                        </div>
                    </div>
                    <div class="list-forum">
                        <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                            <div class="avatar" style="">W</div>
                        </a>
                        <div class="flex-fill">
                            <div class="list-footer">
                                <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                    admin</a>,
                                6 month ago
                            </div>
                            <a href="https://demo.codelug.com/wovie/discussion/dsfsd-3">
                                <div class="name">
                                    dsfsd </div>
                                <div class="desc">
                                    fsfsf </div>
                            </a>
                        </div>
                        <div class="list-forum-comment">
                            <span class="count">0</span>
                            <span class="text">Reply</span>
                        </div>
                    </div>
                    <div class="list-forum">
                        <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                            <div class="avatar" style="">W</div>
                        </a>
                        <div class="flex-fill">
                            <div class="list-footer">
                                <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                    admin</a>,
                                7 month ago
                            </div>
                            <a href="https://demo.codelug.com/wovie/discussion/test-1">
                                <div class="name">
                                    Test </div>
                                <div class="desc">
                                    Test discussions </div>
                            </a>
                        </div>
                        <div class="list-forum-comment">
                            <span class="count">1</span>
                            <span class="text">Reply</span>
                        </div>
                    </div>
                    <div class="text-muted text-12">
                        5
                        contains content </div>
                </div>
            </div>
        </div>
    </div>
@endsection
