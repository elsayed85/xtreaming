@extends('layouts.app')

@section('main')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-6 py-3 py-md-5">
                <form method="post" class="py-5" autocomplete="off">
                    <input type="hidden" name="_ACTION" value="login">
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" class="form-control" id="input-email" placeholder="Email"
                            value="" required="true" autocomplete="off">
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-control-label">Password</label>
                        <input type="password" name="password" class="form-control" id="input-password"
                            placeholder="Password" required="true" autocomplete="off">
                        <a href="/forgot-password" class="d-inline-block mt-2 text-12">Forgot
                            password</a>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-block btn-theme btn-lg">Login</button>
                    </div>

                    <div class="text-center">Don't have an account ? <a href="/register"
                            class="text-white">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
