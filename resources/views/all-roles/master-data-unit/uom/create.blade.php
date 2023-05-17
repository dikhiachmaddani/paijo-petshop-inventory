@extends('layout.main-layout')
@section('main')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Create UoM</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('uom.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="unit" class="form-label">unit</label>
                                    <input type="text" class="form-control" id="unit" name="unit" required
                                        placeholder="masukkan unit" value="{{ old('unit') }}" aria-describedby="unitHelp">
                                    @error('unit')
                                        <div id="unitHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">desc</label>
                                    <input type="text" class="form-control" id="desc" name="desc" required
                                        placeholder="masukkan desc" value="{{ old('desc') }}" aria-describedby="descHelp">
                                    @error('desc')
                                        <div id="descHelp" class="form-text text-danger">{{ $message }}</div>
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
