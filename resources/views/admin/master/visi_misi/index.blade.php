@extends('admin.app')
@section('title','Jenis')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Visi Dan Misi</h4>

<div class="card mb-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    {{-- <h5 class="mb-0">Basic Layout</h5> --}}
  </div>
  <div class="card-body">
    <form action="{{ $visi != null ? route('visi_misi.update',$visi->id) : route('visi_misi.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      @if ($visi != null)
      @method('PUT')
      @endif
      <div class="mb-3">
        <label class="form-label" for="basic-default-fullname">Visi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="visi" rows="2">{{$visi != null ?$visi->visi : null}}</textarea>
      </div>
      <div class="mb-3">
        <div class="row mb-3">

          <div class="col-11">
              {{-- <div class=" mb-3 "> --}}
              <label class="" for="basic-default-company"><strong>Misi</strong></label>
            </div>
            <div class="col-1">
              <button type="button" class="btn btn-icon btn-info" onclick="getMisis()">
                <span class="tf-icons bx bx-plus bx-sm"></span>
              </button>
            {{-- </div> --}}
          </div>
        </div>
        <div id="show-misi">
              @if (!empty($misi))
              @foreach ($misi as $item)
              <div class="row mb-4">
                <div class="col-11">
                  <input type="text" name="misi[]" class="form-control" id="basic-default-company" value="{{$item->misi}}" placeholder="...">
                </div>
                <div class="col-1">
                  <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                  data-bs-offset="0,4"
                  data-bs-placement="top"
                  data-bs-html="true"
                  title="<span>Tambah Misi</span>" onclick="deletemisi(this)">
                    <span class="tf-icons bx bx-minus bx-sm"></span>
                  </button>
      
                </div>
      
              </div>
            </div>
            @endforeach
              @else
              <div class="row mb-4">
                <div class="col-11">
                  <input type="text" name="misi[]" class="form-control" id="basic-default-company" placeholder="...">
                </div>
                <div class="col-1">
                  <button type="button" class="btn btn-icon btn-danger" onclick="deletemisi(this)">
                    <span class="tf-icons bx bx-minus bx-sm"></span>
                  </button>
      
                </div>
              </div>
              
                
            @endif
            
            
          </div>
            <div class="mx-4 mb-4">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
  </div>
</div>          
<script>
  document.addEventListener("DOMContentLoaded", function () {
  // Your JavaScript function or code here
  // It will run when the page is fully loaded.
    // getMisi();
});
  // $(document).ready(function(){
  // });
  function getMisis(){
    $("#show-misi").prepend(`<div class="row mb-4">
            <div class="col-11">
              <input type="text" name="misi[]" class="form-control" id="basic-default-company" placeholder="...">
            </div>
            <div class="col-1">
              <button type="button"  class="btn btn-icon btn-danger remove-misi" onclick="deletemisi(this)">
                <span class="tf-icons bx bx-minus bx-sm"></span>
              </button>
  
            </div>
  
          </div>`);
  }
  // $(document).on("click","remove-misi",function (e){
  //   e.preventdefault();
  //   let row = ($this).parent().parent();
  //   $(row).remove();
  // });

  function deletemisi(buttonElement){

    let row = buttonElement.parentElement.parentElement;
    row.remove();
    // document.getElementsByClassName("remove-misi");
    // $(document).on("remove-misi").parent().parent();
    // console.log(document.getElementsByClassName("remove-misi"));
  }

  // function getMisi() {
  //   $.ajaxSetup({
  //       headers: {
  //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  //       },
  //     });
  //     $.ajax({
  //         type: "POST",
  //         url: `{{route("visi_misi.getMisi")}}`,
  //         data: {
  //           _token: "{{ csrf_token() }}", 
  //         },
  //         function (data,response) {
  //             },
  //             success: function(data) {
  //               data.datas.forEach(element => {
  //                 htmlView += `
  //         <div class="col-3 p-0">
  //           <div class="card mx-2 text-center mb-3">
  //             <div class="card-body">
  //               <p class="card-text m-0">${res.produk[i].nama}</p>
  //               <p class="card-text">Rp${res.produk[i].harga_jual.toLocaleString('id-ID')}</p>
  //               <button type="button" class="btn btn-danger d-none" id="delete_product_${res.produk[i].id }"
  //                 onclick="delete_array('${res.produk[i].id }')">Hapus</button>
  //               <input type="hidden" id="unique">
  //               <button type="button" class="btn btn-primary add_array" id="add_product_${res.produk[i].id }"
  //                 onclick="add_array('${res.produk[i].id }')">Tambah
  //                 Produk</button>
  //             </div>
  //           </div>
  //         </div>

  //         <input type="hidden" id="id" value="${res.produk[i].id }">`;
  //               });
  //               console.log(data.data);

  //       }
  //     });
    
  // }
  </script>  


@endsection