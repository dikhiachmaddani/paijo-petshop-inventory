@extends('layout.main-layout')
@section('main')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('manage-user.update', $data->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="name" class="form-label">name</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        placeholder="masukkan nama" value="{{ $data->name }}" aria-describedby="nameHelp">
                                    @error('name')
                                        <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        placeholder="masukkan email" value="{{ $data->email }}"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" name="role">
                                        <option @if ($data->role == 'operator') selected="selected" @endif value="operator">Operator</option>
                                        <option @if ($data->role == 'manager') selected="selected" @endif value="manager">Manager</option>
                                        <option @if ($data->role == 'admin') selected="selected" @endif value="admin">Admin</option>
                                    </select>
                                    @error('role')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="masukkan password" aria-describedby="passwordHelp">
                                    @error('password')
                                        <div id="passwordHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation"
                                        placeholder="masukkan kembali password" aria-describedby="passwordHelp">
                                    @error('password')
                                        <div id="passwordHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('manage-user.index') }}" class="btn btn-outline-primary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
