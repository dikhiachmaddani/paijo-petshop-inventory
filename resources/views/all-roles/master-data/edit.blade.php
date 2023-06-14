@extends('layout.main-layout')
@section('main')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Master Data Barang</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.master-data-barang.update',$masterDataBarang->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar </label>
                                    <input class="form-control" type="file" name="image" id="formFile">
                                  </div>
                                <div class="mb-3">
                                    <label for="serial_number" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="serial_number" name="serial_number" required
                                        placeholder="masukkan serial number" value="{{$masterDataBarang->serial_number}}" aria-describedby="serialNumberHelp">
                                    @error('serial_number')
                                        <div id="serialNumberHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="item_name" name="item_name" required
                                        placeholder="masukkan nama barang" value="{{$masterDataBarang->item_name}}" aria-describedby="itemNameHelp">
                                    @error('itemNameHelp')
                                        <div id="itemNameHelp" class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Brand</label>
                                    <select class="form-select" name="brand_id">
                                        @foreach ($brand as $brands)
                                            <option value="{{ $brands->id }}">{{ $brands->name_brand }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama UoM</label>
                                    <select class="form-select" name="uom_id">
                                        @foreach ($uom as $uoms)
                                            <option value="{{ $uoms->id }}">{{ $uoms->unit }}</option>
                                        @endforeach
                                    </select>
                                    @error('uom_id')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Brand</label>
                                    <select class="form-select" name="category_id">
                                        @foreach ($category as $categorys)
                                            <option value="{{ $categorys->id }}">{{ $categorys->name_category }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="price" name="price" required
                                        placeholder="masukkan harga" value="{{$masterDataBarang->price}}" aria-describedby="priceHelp">
                                    @error('priceHelp')
                                        <div id="priceHelp" class="form-text text-danger">{{ $message }}</div>
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
