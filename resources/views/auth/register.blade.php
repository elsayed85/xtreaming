@extends('layouts.app')
@section('main')
    <div class="py-lg-7 py-5">
        <div class="h-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <form method="post" class="" name="login">
                        <input type="hidden" name="_TOKEN"
                            value="JDJ5JDEwJGZHR0x4WUVFOEtvUFFzUkcyUXJXRi5XaEhwdFdyU3o3QW9LMVRERmdrR3hObDFXejZmTFE2">
                        <input type="hidden" name="_ACTION" value="register">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label text-body">
                                        Firstname</label>
                                    <input type="text" name="firstname" placeholder="Firstname"
                                        class="form-control fs-sm form-control-lg bg-gray-200 border-0" id="firstname"
                                        tabindex="1" required="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label text-body">
                                        Lastname</label>
                                    <input type="text" name="lastname" placeholder="Lastname"
                                        class="form-control fs-sm form-control-lg bg-gray-200 border-0" id="lastname"
                                        tabindex="1" required="true">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label text-body">
                                Username</label>
                            <input type="text" name="username" placeholder="Username"
                                class="form-control fs-sm form-control-lg bg-gray-200 border-0" id="username"
                                tabindex="2" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-body">
                                Email</label>
                            <input type="email" name="email" placeholder="Email"
                                class="form-control fs-sm form-control-lg bg-gray-200 border-0" id="email"
                                tabindex="3" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-body">
                                Password</label>
                            <input type="password" name="password" placeholder="Password"
                                class="form-control fs-sm text-body form-control-lg bg-gray-200 border-0" id="password"
                                required="true" minlength="5" tabindex="4">
                        </div>
                        <div class="mb-3">
                            <div class="fs-xs text-body text-center px-lg-6">
                                I agree with Privacy and Policy, Terms and Condition </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-theme btn-lg" tabindex="5">
                                Sign up</button>
                        </div>
                    </form>
                    <div class="fs-sm text-center text-muted my-3">
                        Already have an account ?<a href="https://demo.codelug.com/xtreaming/login"
                            class="text-current fw-semibold ms-2" tabindex="4">
                            Login</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
