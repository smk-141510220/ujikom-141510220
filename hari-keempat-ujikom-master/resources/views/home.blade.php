@extends('layouts.app')

@section('content')
<div class="col-md-3 ">
   
        <div class="panel-heading">
        

                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('golongan')}}">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('pegawai')}}">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><hr>  

                </div>
            </center>
        </div>
    </div>
</div>


<center>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                <center>
                <h3>MY APPLICATION</h3>
                    <h5>SELAMAT DATANG {{auth::user()->name }}</h5>
                </div>
            </div>
        </div>
</center>

<div class="col-md-3">
   
        <div class="panel-heading">
           

                <div class="panel-body" align="center">
                    <a class="btn btn-primary form-control" href="{{url('lemburpegawai')}}">Lembur Pegawai</a><hr>
                  
                    <a class="btn btn-primary form-control" href="{{url('tunjanganpegawai')}}">Tunjangan </a><hr>
                    <a class="btn btn-primary form-control" href="{{url('penggajian')}}">Penggajian Karyawan</a><hr>  

                </div>
            </center>
        </div>
    </div>
</div>
@endsection