@extends('starter')

@section('isi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card overflow-auto">
                <div class="card-body">
                    <h1 class="text-center">Data Agenda</h1>
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
                                <th scope="col">Jumlah Kamar</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datakamar as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->tipe_kamar }}</td>
                                <td>{{ $item->jumlah_kamar }}</td>
                                <td>
                                    <a href="{{ url('/edit-kamar',$item->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url('create-kamar') }}" class="btn btn-success">Tambah +</a>

        </div>
    </div>
</div>

@endsection