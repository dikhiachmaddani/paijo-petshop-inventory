@extends('layout.main-layout')
@section('main')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Create Keluar Barang</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.keluar-barang.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" required
                                        placeholder="masukkan reference" value="{{ old('reference') }}" aria-describedby="referenceHelp">
                                    @error('reference')
                                        <div id="referenceHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Picker</label>
                                    <select class="form-select" name="user_id">
                                        @foreach ($picker as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Barang</label>
                                    <select class="form-select" name="master_data_barang_id">
                                        @foreach ($master_data_barang as $barang)
                                            <option value="{{ $barang->id }}">{{ $barang->item_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('master_data_barang_id')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Total yang Diambil</label>
                                    <input type="number" class="form-control" id="stock" name="stock" required
                                        placeholder="masukkan total barang yang diambil" value="{{ old('stock') }}" aria-describedby="stockHelp">
                                    @error('stock')
                                        <div id="stockHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="remarks" class="form-label">Remarks</label>
                                    <input type="text" class="form-control" id="remarks" name="remarks" required
                                        placeholder="remarks" value="{{ old('remarks') }}" aria-describedby="remarksHelp">
                                    @error('remarks')
                                        <div id="remarksHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('dashboard.master-data-barang.index') }}" class="btn btn-outline-primary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
