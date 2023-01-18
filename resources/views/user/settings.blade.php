@extends('layouts.app')

@section('main')
    <div class="app-content">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://demo.codelug.com/wovie">Home</a></li>
                <li class="breadcrumb-item active"><a href="https://demo.codelug.com/wovie/settings">Settings</a></li>
            </ol>
        </nav>
        <form method="post" autocomplete="off" enctype="multipart/form-data" class="form-content">
            <input type="hidden" name="_ACTION" value="save">
            <input type="hidden" name="_TOKEN"
                value="JDJ5JDEwJEJWQk13UmRMUGtucFFaa3VOTDNkTGVtMy5rMW9BMTRmYkl6VUszZG1QYy9ZU01qcWVWMGR5">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="media-select media media-selected" style="">
                            <div class="media-btn" id="input-cover">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#upload">
                                    </use>
                                </svg>
                            </div>
                            <div class="media-remove" data-id="1">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#close">
                                    </use>
                                </svg>
                            </div>
                        </div>
                        <input type="file" name="image" class="media-input d-none" id="file-input-cover"
                            data-preview="media-select">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="custom-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name"
                            value="Wovie">
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="admin"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="admin@admin.com" required="true">
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="custom-label">Gender</label>
                                <select name="data[gender]" class="custom-select">
                                    <option value="">
                                        Gender </option>
                                    <option value="2">
                                        Male </option>
                                    <option value="1">
                                        Female </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="custom-label">Location</label>
                                <input type="text" name="data[location]" class="form-control" placeholder="Location"
                                    value="Brasil">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="custom-label">About</label>
                        <textarea name="data[about]" class="form-control" placeholder="About">Admin</textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="custom-label">Facebook</label>
                                <input type="text" name="data[social][facebook]" class="form-control"
                                    placeholder="Facebook" value="SSSS">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="custom-label">Twitter</label>
                                <input type="text" name="data[social][twitter]" class="form-control"
                                    placeholder="Twitter" value="FAFA">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="custom-label">Instagram</label>
                                <input type="text" name="data[social][instagram]" class="form-control"
                                    placeholder="Instagram" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="custom-label">Youtube</label>
                                <input type="text" name="data[social][youtube]" class="form-control"
                                    placeholder="Youtube" value="FAFA">
                            </div>
                        </div>
                    </div>
                    <div class="alert bg-warning-lt text-12 mb-3">
                        Enter your username in social media accounts </div>
                    <button type="submit" class="btn btn-theme btn-lg d-block d-md-inline-block mb-4 px-5">Save
                        Changes</button>
                </div>
            </div>
        </form>
    </div>
@endsection
