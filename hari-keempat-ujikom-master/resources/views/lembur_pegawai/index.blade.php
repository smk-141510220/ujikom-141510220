@extends('layouts/app')
@section('content')
<div class="col-md-2 ">
    
        <div class="panel-heading">
           

                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('golongan')}}">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('pegawai')}}">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><hr>  
                      <a class="btn btn-primary form-control" href="{{url('lembur_pegawai')}}">Lembur Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('tunjangan_pegawai')}}">Tunjangan </a><hr>
                    <a class="btn btn-primary form-control" href="{{url('penggajian')}}">Penggajian Karyawan</a><hr>  

                </div>
            </center>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel panel-primary">
                <div class="panel-heading"><h1>Lembur Pegawai</h1></div>
                <div class="panel-body"
			   
<div class="form-group"><center>
                <form action="{{url('lembur_pegawai')}}/?kode_lembur=kode_lembur">
                <input type="text" name="kode_embur" placeholder="cari kode lembur ">
                	<input type="submit" value="cari " class="btn btn-primary">
</center>
	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
			   

                </form>
                	
                </div>
                	
                </div>
                    <table class="table" border="1">
                        <thead>
			<a href="{{url('lembur_pegawai/create')}}" class="btn btn-success">Tambah Data</a> 
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode lembur </center></th>
		<th colspan="2">Nip Dan Nama Pegawai</th>
		<th colspan="2">jabatan dan golongan</th>
		<th><center>jumlah jam</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($lembur_pegawai as $lembur_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$lembur_pegawais->kode_lembur_id}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->nip}}
			<td>{{$lembur_pegawais->pegawaiModel->user->name}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$lembur_pegawais->jumlah_jam}}</td>
			
		<td><a href="{{route('lembur_pegawai.edit',$lembur_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['lembur_pegawai.destroy',$lembur_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection