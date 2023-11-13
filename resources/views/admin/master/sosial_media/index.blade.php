@extends('admin.app')
@section('title','Sosial Media')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span>Sosial Media</h4>


<div class="card mb-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    {{-- <h5 class="mb-0">Basic Layout</h5> --}}
  </div>
  <div class="card-body">
    <form action="{{ $sosial != null ? route('sosial_media.update',$sosial->id) : route('sosial_media.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      @if ($sosial != null)
      @method('PUT')
      @endif
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Instagram</label>
            <input type="text" class="form-control" name="instagram" value="{{ $sosial != null ? old('instagram', $sosial->instagram) : old("instagram") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Facebook</label>
            <input type="text" class="form-control" name="facebook" value="{{ $sosial != null ? old('facebook', $sosial->facebook) : old("facebook") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Tiktok</label>
            <input type="text" class="form-control" name="tiktok" value="{{ $sosial != null ? old('nm_barang', $sosial->tiktok) : old("tiktok") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Youtube</label>
            <input type="text" class="form-control" name="youtube" value="{{ $sosial != null ? old('nm_barang', $sosial->youtube) : old("youtube") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $sosial != null ? old('nm_barang', $sosial->email) : old("email") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Link Google Maps</label>
            <input type="text" class="form-control" name="maps" value="{{ $sosial != null ? old('nm_barang', $sosial->maps) : old("maps") }}" id="basic-default-company" placeholder="...">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
</div>          
  
  


@endsection