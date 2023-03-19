@extends('layout.main-layout')

@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h5 class="card-title fw-semibold">Master Data Kategori</h5>
                        </div>
                        <div class="col-6 text-end">
                            <a href="" class="btn btn-success ">Create</a>
                        </div>
                    </div>
                    <div>
                        <table id="manage-user" class="table text-nowrap pt-2 mb-3 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Kategori</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">1</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">123124124</h6>
                                    </td>
                                    <td class="border-bottom-0 d-flex gap-1">
                                        <a href="" class="btn btn-warning"><i class="ti ti-edit"></i></a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger show_confirm"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- @forelse ($users as $user)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $user->email }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $user->role }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ date_format($user->created_at, 'd M Y') }}</p>
                                        </td>
                                        @if ($user->id === auth()->user()->id)
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">can't delete this one.</h6>
                                            </td>
                                        @else
                                            <td class="border-bottom-0 d-flex gap-1">
                                                <a href="{{ route('manage-user.edit', $user->id) }}"
                                                    class="btn btn-warning"><i class="ti ti-edit"></i></a>
                                                <form action="{{ route('manage-user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger show_confirm"><i
                                                            class="ti ti-trash"></i></button>
                                                </form>
                                            </td>
                                        @endif

                                    </tr> --}}
                                {{-- @empty
                                    <tr>
                                        <td class="border-bottom-0 " colspan="4">
                                            <h6 class="fw-semibold mb-0">maaf, data users kosong.</h6>
                                        </td>
                                    </tr>
                                @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
