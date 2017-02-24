@extends('layouts/app')
@section('content')
<div class="col-md-2 ">
   
        <div class="panel-heading">
           
              
                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('golongan')}}">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('pegawai')}}">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><hr>  
                      <a class="btn btn-primary form-control" href="{{url('lemburpegawai')}}">Lembur Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('tunjanganpegawai')}}">Tunjangan </a><hr>
                    <a class="btn btn-primary form-control" href="{{url('penggajian')}}">Penggajian</a><hr>  

                </div>
          
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel panel-primary">
                <div class="panel-heading"><h1>Tunjangan Pegawai</h1></div>
                <div class="panel-body"
                <div class="form-group"><center>
                <form action="{{url('tunjangan_pegawai')}}/?kode_tunjangan=kode_tunjangan">
                <input type="text" name="kode_tunjangan" placeholder="cari kode tunjangan">
                    <input type="submit" value="cari " class="btn btn-primary">
</center>

                </form>
                    
                </div>
                    
                </div>
	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="{{url('tunjangan_pegawai/create')}}" class="btn btn-success">Tambah Data</a> 
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Nip</center></th>
		<th><center>Nama pegawai</center></th>
		<th>Jabatan</th>
		<th>Golongan</th>
		<th><center>Status</center></th>
		<th><center>Jumlah anak</center></th>
		<th><center>Besaran uang</center></th>
		<th colspan="2">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan_pegawai as $tunjangan_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->kode_tunjangan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->nip}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->User->name}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->status}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->jumlah_anak}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->besaran_uang}}</td>
		<td><a href="{{route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection