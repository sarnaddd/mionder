@extends('dashboard.master')

@section('konten')
  <h4>User</h4>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <button type="button" data-toggle="modal" data-target="#addUser" class="btn btn-primary btn-icon-split">
            <span class="text">Add User</span>
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="row justify-content-around">
                            <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editform{{ $user->id }}" form="EditUser_{{ $user->id }}">
                                <span class="icon text-white">
                                    <i class="fa-solid fa-pen"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button>
                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white">
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    {{-- Modal Form START --}}
                    <div class="modal fade" id="editform{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editformLabel{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editformLabel">Edit User</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{ route('user.update', $user->id )}}" id="EditUser_{{ $user->id }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-form-label">username:</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $user->username }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role" class="col-form-label">Role:</label>
                                    <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                                        <option value="">Select Role</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="dokter" {{ $user->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                                        <option value="pasien" {{ $user->role == 'patient' ? 'selected' : '' }}>Patient</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                          </div>
                        </div>
                      </div>
                      {{-- Modal Form END --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- form add user --}}
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="KeluhanFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUser">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/user/create" id="addUser" method="POST">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="username" class="col-form-label">username:</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $user->username }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="role" class="col-form-label">Role:</label>
                <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                    <option value="">Select Role</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="dokter" {{ $user->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                </select>
                @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endsection

