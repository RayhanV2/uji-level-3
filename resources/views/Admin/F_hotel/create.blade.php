@extends('starter')

@section('isi')
<div class="container">
        <a href="{{ url('fasilitas-hotel') }}" class="btn btn-primary">Back</a>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan-fasilitas-hotel') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('nama_fasilitas')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('keterangan')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="text" name="image" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('image')
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