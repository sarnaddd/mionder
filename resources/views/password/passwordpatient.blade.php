@extends('dashboard.patient')

@section('konten')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<div class="container-login">
<div class="form-box">
    <h1>Change Password</h1>
    <form action="/changepassword/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="old_password" class="form-label">Old Password</label>
            <input type="password" class="form-control" id="old_password" name="old_password" aria-describedby="emailHelp">
        </div>
        @error('old_password')
            <span class="error-message">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" aria-describedby="emailHelp">
        </div>
        @error('new_password')
            <span class="error-message">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="new_password_confirmation" class="form-label">Re-enter Password</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" aria-describedby="emailHelp">
        </div>
        @error('new_password_confirmation')
            <span class="error-message">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Confirm</button>

    </form>
</div>
</div>
@endsection
