@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
         <div class="col-8 m-auto">
             <div class="card">
             <div class="card-header">
             <h3 class="float-start"> Form Tambah Data</h3>

             </div>
     <div class="card-body">
     <form action="/dosen" method="POST" enctype="multipart/form-data">
        @csrf
     <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">NIDN</label>
     <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Nama Dosen</label>
     <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Email</label>
     <input type="text" name="email" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Rumpun</label>
     <select class="form-control" name="rumpun" id="">
        <option value="">-Pilih Rumpun-</option>
        <option value="Komputer">Komputer</option>
        <option value="Bisnis">Bisnis</option>
        <option value="Sekretaris">Sekretaris</option>
        <option value="Akuntansi">Akuntansi</option>
        <option value="Manajemen">Manajemen</option>
        <option value="Wirausaha">Wirausaha</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">  No Handphone </label>
     <input type="text" name="nohp" class="form-control" id="exampleInputPassword1">
   </div>

   <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
    </form>
         </div>
    </div>
 </div>
@endsection
