@extends('starter')

@section('isi')
    <div class="container">
            <a href="{{ url('fasilitas-kamar') }}" class="btn btn-primary">Back</a>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update-fasilitas-kamar',$fasilitaskamar->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                              <input type="text" name="tipe_kamar" value="{{ $fasilitaskamar->tipe_kamar }}" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                              @error('tipe_kamar')
                                <div class="text-warning">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
                              <input type="text" name="nama_fasilitas" value="{{ $fasilitaskamar->nama_fasilitas }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              @error('nama_fasilitas')
                                <div class="text-warning">{{ $message }}</div>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection