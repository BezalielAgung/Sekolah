@extends('admin.app')
@section('title','Jenis')
@section('content')


<div  class="card mt-4">
  <div class="card-body">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-2">
        <h4 class="card-title fw-bolder">Create</h4>
        <a href="{{ route("berita.kategori.index")}}">
              <button  type="button" class="btn btn-warning m-1">Kembali</button>
          </a>
          </div>
          <form action="{{ $kategori != null ? route('berita.kategori.update',$kategori->id) : route('berita.kategori.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($kategori != null)
            @method('PUT')
            @endif
            <div class="mb-3">
              <label  class="form-label">Nama Kategori</label>
              <input type="text" class="form-control" value="{{ $kategori != null ? old('kategori', $kategori->nm_kategori) : null }}" name="kategori" placeholder="Contoh:Kegiatan" id="kategori" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  </div>
</div>


@endsection