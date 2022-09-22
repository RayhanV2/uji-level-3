@extends('starter')

@section('isi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card overflow-auto">
                <div class="card-body">
                    <h1 class="text-center">Data Fasilitas Kamar</h1>
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <!-- table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Nama Fasilitas</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_f_kamar as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->tipe_kamar }}</td>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>
                                    <a href="{{ url('/edit-f-kamar',$item->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('create-f-kamar') }}" class="btn btn-success fs-4 mt-3 rounded-circle">+</a>
            </div>

        </div>
    </div>
</div>

@endsection