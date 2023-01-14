@extends('layouts.app')
@section('main')
    <div class="layout-section pt-3">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_ACTION" value="save">
                <input type="hidden" name="_TOKEN"
                    value="JDJ5JDEwJDBWVVhFZjd2bTE0RVh3Y2lCSHVPVnV5ZUlrOHpicFR5ZC5TM3d1TjF5dzZnc3BteTV1U2d5">
                <div class="row gx-xl-5 h-100 justify-content-center">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">
                                        Firstname</label>
                                    <input type="text" name="firstname" placeholder="Firstname" class="form-control"
                                        id="firstname" required="true" minlength="3" value="Xtreaming">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">
                                        Lastname</label>
                                    <input type="text" name="lastname" placeholder="Lastname" class="form-control"
                                        id="lastname" required="true" minlength="3" value="Xtreaming">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" id="email"
                                required="true" value="admin@admin.com">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                Username</label>
                            <input type="text" name="username" placeholder="Username" class="form-control" id="username"
                                required="true" value="admin">
                        </div>
                        <div class="mb-3">
                            <label for="about" class="form-label">
                                About</label>
                            <textarea type="text" name="about" placeholder="About" class="form-control" id="about" minlength="3"
                                rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Gender</label>
                            <select name="gender" class="form-select">
                                <option value="">
                                    Choose </option>
                                <option value="Male">
                                    Male </option>
                                <option value="Female">
                                    Female </option>
                            </select>
                        </div>
                        <hr class="my-3">
                        <div class="mb-2">
                            <label for="password" class="form-label">
                                New Password</label>
                            <input type="text" name="newpassword" placeholder="New Password" class="form-control"
                                id="password" minlength="3" value="">
                            <div class="py-2 text-muted fs-xs">**
                                You can use this field if you want to change your password..</div>
                        </div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="h-100 w-xl-300">
                            <div class="mb-3">
                                <div class="ratio-select ratio rounded position-relative input-cover"
                                    style="--bs-aspect-ratio: 100%;background-image: url(">
                                    <div class="ratio-preview text-muted d-flex  align-items-center justify-content-center">
                                        <div class="text-center">
                                            <svg width="34" height="34" fill="none" stroke="currentColor"
                                                stroke-width="1.75">
                                                <use
                                                    xlink:href="{{ asset('images/icons.svg') }}#image">
                                                </use>
                                            </svg>
                                            <div class="fs-base mt-2">
                                                Select image </div>
                                            <div class="fs-xs">
                                                Allow image type jpg, png, webp </div>
                                        </div>
                                    </div>
                                    <div class="ratio-btn p-3">
                                        <div class="btn btn-square p-0 rounded-circle btn-theme mx-1 btn-upload"
                                            data-id="input-cover">
                                            <svg width="16" height="16" stroke="currentColor" stroke-width="2"
                                                fill="none">
                                                <use
                                                    xlink:href="{{ asset('images/icons.svg') }}#upload">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="btn btn-square p-0 rounded-circle btn-light mx-1 btn-clear d-none"
                                            data-id="input-cover">
                                            <svg width="18" height="18" stroke="currentColor" stroke-width="2"
                                                fill="none">
                                                <use
                                                    xlink:href="{{ asset('images/icons.svg') }}#close">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="image" class="ratio-input d-none" id="file-input-cover"
                                    data-preview="ratio-select" accept="image/*">
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-theme py-3">
                                    Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
