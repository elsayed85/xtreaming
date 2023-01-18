@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="d-flex">
            <div class="app-content">
                <div class="app-section">
                    <div class="mb-3">
                        <div class="text-24 text-white font-weight-bold">Categories</div>
                    </div>
                    <div class="row row-cols-md-5 row-cols-2">
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/action" class="list-category-box"
                                style="background-color: #2eacb3" title="Action">
                                Action
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/adventure" class="list-category-box"
                                style="background-color: #e0387b" title="Adventure">
                                Adventure
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/animation" class="list-category-box"
                                style="background-color: #e39a2d" title="Animation">
                                Animation
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/comedy" class="list-category-box"
                                style="background-color: #40bd72" title="Comedy">
                                Comedy
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/crime" class="list-category-box"
                                style="background-color: #3d63e0" title="Crime">
                                Crime
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/family" class="list-category-box"
                                style="background-color: " title="Family">
                                Family
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/fantasy" class="list-category-box"
                                style="background-color: " title="Fantasy">
                                Fantasy
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/history" class="list-category-box"
                                style="background-color: " title="History">
                                History
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/documentary" class="list-category-box"
                                style="background-color: " title="Documentary">
                                Documentary
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category-box"
                                style="background-color: " title="Drama">
                                Drama
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/horror" class="list-category-box"
                                style="background-color: " title="Horror">
                                Horror
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/music" class="list-category-box"
                                style="background-color: " title="Music">
                                Music
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/mystery" class="list-category-box"
                                style="background-color: " title="Mystery">
                                Mystery
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/romance" class="list-category-box"
                                style="background-color: " title="Romance">
                                Romance
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/science-fiction" class="list-category-box"
                                style="background-color: " title="Science Fiction">
                                Science Fiction
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/war" class="list-category-box"
                                style="background-color: " title="War">
                                War
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://demo.codelug.com/wovie/category/western" class="list-category-box"
                                style="background-color: " title="Western">
                                Western
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
