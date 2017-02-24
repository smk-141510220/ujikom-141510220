@extends('layouts/app')
@section('content')
<div class="col-md-9 ">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tunjangan </center></div>

	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="{{url('tunjangan/create')}}" class="btn btn-success">Tambah Data</a> 
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Nip</center></th>
		<th><center>Nama pegawai</center></th>
		<th><center>Jabatan</center></th>
		<th><center>Golongan</center></th>
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
		@foreach($tunjangan as $tunjangans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangans->tunjanganModel->kode_tunjangan}}</td>
			<td>{{$tunjangans->pegawaiModel->nip}}</td>
			<td>{{$tunjangans->pegawaiModel->User->name}}</td>
			<td>{{$tunjangans->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$tunjangans->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$tunjangans->tunjanganModel->status}}</td>
			<td>{{$tunjangans->tunjanganModel->jumlah_anak}}</td>
			<td>{{$tunjangans->tunjanganModel->besaran_uang}}</td>
		<td><a href="{{route('tunjangan.edit',$tunjangans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection