@extends('starter')

@section('isi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card overflow-auto">
                <div class="card-body">
                    <h1 class="text-center">Data Fasilitas Hotel</h1>
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
                                <th scope="col">Nama Fasilitas</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Image</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datafasilitashotel as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td><img src="{{ url('image') }}/{{ $item->image }}" width="100" height="100" alt="..."></td>
                                <td>
                                    <a href="{{ url('/edit-f-hotel',$item->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('create-f-hotel') }}" class="btn btn-success fs-4 mt-3 rounded-circle">+</a>
            </div>

        </div>
    </div>
</div>

@endsection