@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        <div class="auth auth-login">
            <form method="post" autocomplete="off" class="form-content" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="custom-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required="true"
                        value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="true"
                        value="{{ old('username') }}">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="true"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-block btn-theme btn-lg">Register</button>
            </form>
            <div class="text-center my-3">
                I have a registered account <a href="{{ route('login') }} }}" class="text-white">Login</a>
            </div>
        </div>
    </div>
@endsection
