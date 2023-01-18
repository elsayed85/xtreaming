@extends('layouts.app')
@section('main')
    <div class="app-content">
        {{ Breadcrumbs::render() }}
        <form method="post" autocomplete="off"class="form-content" action="{{ route('update_settings') }}">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="custom-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name"
                            value="{{ old('name', $u->name) }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username"
                            value="{{ old('username', $u->username) }}" required="true">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ old('email', $u->email) }}" required="true">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="custom-label">Gender</label>
                                <select name="gender" class="custom-select">
                                    <option value=""> Gender </option>
                                    <option value="male" @if($u->is_male) selected @endif> Male </option>
                                    <option value="female" @if(!$u->is_male) selected @endif> Female </option>
                                </select>
                            </div>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-theme btn-lg d-block d-md-inline-block mb-4 px-5">Save
                        Changes</button>
                </div>
            </div>
        </form>
    </div>
@endsection
