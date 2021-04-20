@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
            <div class="px-3 py-2">
               <h5 class="font-weight-bold">Daftar Barang</h5>
            </div>
            <div class="card-body">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>Kode Barang</th>
                        <th>Nama Suplier</th>
                        <th>Nama Barang</th>
                        <th>Phone</th>
                        <th>Stock</th>
                        <th>Option</th>
                     </tr>
                  </thead>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route('barang.create')}}" class="btn btn-outline-primary btn-sm">Buat Request</a>
                        </td>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection