@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        <div class="auth auth-login">
            <form method="post" autocomplete="off" class="form-content">
                <input type="hidden" name="_ACTION" value="register">
                <div class="form-group">
                    <label class="custom-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required="true"
                        value="">
                </div>
                <div class="form-group">
                    <label class="custom-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="true"
                        value="">
                </div>
                <div class="form-group">
                    <label class="custom-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="true"
                        value="">
                </div>
                <div class="form-group">
                    <label class="custom-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                </div>
                <button type="submit" class="btn btn-block btn-theme btn-lg">Register</button>
            </form>
            <div class="text-center my-3">I have a registered account <a href="/login"
                    class="text-white">Login</a></div>
        </div>
    </div>
@endsection
