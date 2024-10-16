@extends('master')
@section('title-page', 'Kategori Paket MySCH.ID')

@section('content')
<a href="/tambahdata" class="btn btn-primary mb-3">Tambah Kategori</a>

@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php($no = 1)
            @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach          
        </tbody>
    </table>
@endsection
@push('scripts')
    <script src="{{ asset('jquery.js') }}"></script>
   
 @endpush