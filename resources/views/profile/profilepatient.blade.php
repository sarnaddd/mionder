@extends('dashboard.patient')

@section('konten')

    <div class="profile-container">
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

        <div class="form-profile">
            <form action="/profile/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
            @csrf
            <h1>{{ auth()->user()->name }}</h1>
            <p>{{ auth()->user()->role }}</p>
            <p>{{ auth()->user()->email }}</p>

                <div class="card-body-profile">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-control" id="name" placeholder="Name">
                    </div>
                    @error('name')
                            <span class="text-danger mb-20">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-dark" onclick="return confirm('Save?')">Save Profile</button>
                </div>

            </form>
        </div>
    </div>

@endsection
