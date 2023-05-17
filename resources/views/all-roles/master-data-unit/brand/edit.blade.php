@extends('layout.main-layout')
@section('main')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Brand</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('manage-user.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">name</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        placeholder="masukkan nama" value="{{ old('name') }}" aria-describedby="nameHelp">
                                    @error('name')
                                        <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        placeholder="masukkan email" value="{{ old('email') }}"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" name="role">
                                        <option selected="selected" value="operator">Operator</option>
                                        <option value="manager">Manager</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('role')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        placeholder="masukkan password" aria-describedby="passwordHelp">
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
