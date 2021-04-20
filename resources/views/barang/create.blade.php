@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="card border-0 shadow">
            <div class="card-body">
               <div class="alert alert-danger">
                  <h5 class="font-weight-bold">
                     Perhatian !!!
                  </h5>
                  <h5>
                     Masukkan semua informasi permintaan dibawah ini dengan lengkap dan benar.
                  </h5>
                  </div>
                  <h5 class="font-weight-bold">
                     Data Pribadi
                  </h5>
                  <form action="" method="get">
                     @csrf
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label for="">Nama Lengkap</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                              <label for="">Alamat</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                              <label for="">E-mail</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                              <label for="">Telp</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                        <!-- <h5 class="font-weight-bold">
                           Detail Permintaan
                        </h5> -->
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="">Nama Barang</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="">Jumlah Stock</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="">Jumlah Permintaan</label>
                              <input type="text" name="name" id="" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-primary btn-sm">Kirim Permintaan</button>
                                <a href="" class="btn btn-outline-danger btn-sm">Cancel</a>
                            </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection