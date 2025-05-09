@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
         <div class="col-8 m-auto">
             <div class="card">
             <div class="card-header">
             <h3 class="float-start"> Form Data Dosen</h3>

             </div>
     <div class="card-body">
     <form action="proses.php" method="POST" enctype="multipart/form-data">
     <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">NIDN</label>
     <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Nama Dosen</label>
     <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Jabatan</label>
     <select name="jabatan" class="form-control" id="">
       <option value="">--Pilih Jabatan--</option>
       <option value="Full Time">Full Time</option>
       <option value="Part Time">Part Time</option>
     </select>
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Email</label>
     <input type="text" name="email" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">No Handphone</label>
     <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>

             </div>
         </div>
    </div>
 </div>
@endsection
