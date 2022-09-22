@extends('starter')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan-fasilitas-kamar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                            <select class="form-select form-control" name="tipe_kamar" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Masukkan Tipe Kamar</option>
                                @foreach ($datatipekamar as $datakamar)
                                <option value="{{ $datakamar->tipe_kamar }}">{{ $datakamar->tipe_kamar }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
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
