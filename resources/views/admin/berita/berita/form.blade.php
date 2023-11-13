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
          <form action="{{ $berita != null ? route('berita.berita.update',$berita->id) : route('berita.berita.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($berita != null)
            @method('PUT')
            @endif
            <div class="row mb-5">

              <div class="mb-3">
                <label  class="form-label">Judul</label>
                <input type="text" class="form-control" value="{{ $berita != null ? old('judul', $berita->judul) : null }}" name="judul" placeholder="..." id="judul" >
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                <select class="select2multiple form-select" name="kategori_id[]" id="kategori_id[]" data-placeholder="Pilih Kategori" multiple="multiple">
                  {{-- @if ($kategori = null)
                  <option></option>
                      
                  @endif --}}
                  @foreach ($kategori as $item)
                  <option value="{{$item->id}}">{{$item->nm_kategori}} </option>
                  @endforeach
              </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                <input type="file" class="dropify"  name="image" data-allowed-file-extensions="png jpg jpeg webp"  data-default-file="{{ $berita != null ? asset('storage/berita/'.$berita->image) : null }}" />
                
              </div>
              <div class="mb-3">
                <label  class="form-label">Isi</label>
                <textarea   class="form-control" id="editor" name="isi" rows="3">{{$berita != null ? $berita->isi : null}}</textarea>
                {{-- <div id="editor"></div> --}}
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  </div>
</div>
<script src="{{asset("admin/assets/vendor/libs/ck-editor-5/ckeditor.js")}}"></script>

<script>
  @if($berita != null)
  setTimeout(() => {
    
    $('.select2multiple').val({{$berita->kategori_id}}).change();

  }, 400);
  @endif
  setTimeout(() => {
    $('.dropify').dropify();

    ClassicEditor 
        .create( document.querySelector( '#editor' ),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
        }, )
        .catch( error => {
            console.error( error );
        } );

        $( '.select2multiple' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
    multiselect:true,
    
    

},
);


  }, 100);
</script>


@endsection