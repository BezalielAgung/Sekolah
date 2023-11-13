@extends('admin.app')
@section('title','Jabatan')
@section('content')


{{-- {{  dd(explode('.', Route::current()->getName())[0])}} --}}
<div  class="card mt-4">
  <div class="card-body">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-4">
          <h4 class="card-title"><strong>Jabatan</strong></h4>
          <a href="{{route("guru.jabatan.create")}}">
              <button  type="button" class="btn btn-success fw-bold">Tambah <span class="tf-icons bx bx-plus"></span>
              </button>
          </a>
          </div>
      <div class="table-responsive">
          <table id="myTable" class="table text-nowrap mb-0 align-middle  table-striped">
            <thead class="text-dark fs-4 table-primary">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nama Jabatan</h6>
                </th>
                <th class="border-bottom-0 text-center align-center">
                  <h6 class="fw-semibold mb-0">Action</h6>
                </th>
              </tr>
            </thead>
            <tbody>
               @foreach ($jabatan as $item) 
              <tr>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-semibold">{{$item->nm_kategori}}</p>
                  {{-- <p class="mb-0 fw-semibold">{{$item->nm_jenis}}</p> --}}
                </td>
                <td class="border-bottom-0 text-center">
                  <a href="{{ route('guru.jabatan.edit', $item->id ) }}">
                    <button type="button" class="btn btn-icon btn-warning">
                      <span class="tf-icons bx  bx-pencil"></span>
                    </button>
                  </a>
                  <button type="button" onclick="deletekategori('{{ route('guru.jabatan.destroy',$item->id) }}')"  class="btn btn-icon btn-danger">
                    <span class="tf-icons bx bx-trash"></span>
                  </button>
                </td>
              </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
  </div>
</div>
  

@section('scripts')
{{-- sweetalert --}}
<script>
    function deletekategori(deleteurl) {
$.ajaxSetup({
headers: {
  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
},
});
setTimeout(() => {
Swal.fire({
  title: "Anda Yakin Mau Menghapus?",
  text: "Datanya tidak akan bisa kembali !",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!",
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      type: "DELETE",
      url: deleteurl,
      data: {
        _token: "{{ csrf_token() }}",
      },
      success: function (response) {
        swal(response.status, {
          icon: "success",
        }).then((result) => {
          // location.reload();
        });
      },
    });
    if (result.isConfirmed) {
      setTimeout(() => {
        location.reload();
      }, 500);
    }
      }
}, 100);
});
}
</script>
@endsection

@endsection