@extends('layouts.app')
@section('main')
    <div class="py-lg-7 py-5">
        <div class="h-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <form method="post" class="" name="login">
                        <input type="hidden" name="_TOKEN"
                            value="JDJ5JDEwJFEwd21BSmpSVFBvWWc5VDVZOERFbk8zQkUzbkpDbEtQMXl4MHN4OUFZNDZjcnM2T1FYSTQu">
                        <input type="hidden" name="_ACTION" value="login">
                        <div class="mb-3">
                            <label for="email" class="form-label text-body">Email or username</label>
                            <input type="text" name="email" placeholder="Email or username"
                                class="form-control fs-sm form-control-lg bg-gray-200 border-0" id="email"
                                autofocus="true" tabindex="1">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2 justify-content-between text-muted">
                                <label for="password" class="form-label text-body mb-0">Password</label>
                                <a href="https://demo.codelug.com/xtreaming/reset-password" class="fs-xs text-current"
                                    tabindex="4">Forgot Password ?</a>
                            </div>
                            <input type="password" name="password" placeholder="Password"
                                class="form-control fs-sm text-body form-control-lg bg-gray-200 border-0" id="password"
                                required="true" minlength="5" tabindex="2">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-theme btn-lg" tabindex="3">Login</button>
                        </div>
                    </form>
                    <div class="fs-sm text-center text-muted my-3">Dont have an account ?<a
                            href="https://demo.codelug.com/xtreaming/register" class="text-current fw-semibold ms-2"
                            tabindex="4">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
