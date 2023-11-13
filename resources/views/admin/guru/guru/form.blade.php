@extends('admin.app')
@section('title','Guru')
@section('content')


<div  class="card mt-4">
  <div class="card-body">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-2">
        <h4 class="card-title fw-bolder">Create</h4>
        <a href="{{ route("guru.guru.index")}}">
              <button  type="button" class="btn btn-warning m-1">Kembali</button>
          </a>
          </div>
          <form action="{{ $guru != null ? route('guru.guru.update',$guru->id) : route('guru.guru.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($guru != null)
            @method('PUT')
            @endif
            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label  class="form-label">Nama</label>
                  <input type="text" class="form-control" value="{{ $guru != null ? old('nama', $guru->nama) : null }}" name="nama" placeholder="Nama Guru" id="nama" >
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3">
                  <label  class="form-label">NIP</label>
                  <input type="text" class="form-control" value="{{ $guru != null ? old('nip', $guru->nip) : null }}" name="nip" placeholder="NIP" id="nip" >
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label  class="form-label">Jabatan</label>
                  <select class="select2 form-select " name="jenis_id" data-placeholder="Pilih Jabatan">
                    <option></option>
                  </select>


                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label  class="form-label">Pendidikan</label>
                  <select class="select2 form-select " name="jenis_id" data-placeholder="Pilih Pedidikan">
                    <option></option>
                  </select>


                </div>
              </div>
              <div class="divider divider-primary pr-pl-2">
                <div class="divider-text fw-bold">Masa Kerja</div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label  class="form-label">Masa Kerja</label>
                  <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label  class="form-label">Masa Kerja</label>
                  <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                </div>
              </div>
              <div class="divider divider-primary pr-pl-2">
                <div class="divider-text fw-bold">Tempat Tanggal Lahir</div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="mb-3">
                      <label  class="form-label">Tempat</label>
                      <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="mb-3">
                      <label  class="form-label">Tanggal Lahir</label>
                      <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="mb-3">
                      <label  class="form-label">Agama</label>
                      <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <label  class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    {{-- <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" > --}}
                  </div>
                </div>
                {{-- <div class="col-4">
                  <div class="mb-3">
                    <label  class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="{{ $guru != null ? old('guru', $guru->nm_kategori) : null }}" name="kategori" placeholder="Nama Guru" id="kategori" >
                  </div>
                </div> --}}
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  </div>
</div>

<script>
  setTimeout(() => {
    $( '.select2' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    
} );

    $( '.select2' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    
} );
}, 200);

</script>


@endsection