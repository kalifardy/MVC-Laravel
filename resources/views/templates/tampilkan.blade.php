@extends('templates.index')
@section('content')

<h4>Lihat Data</h4>

ID : {{$tampilkan->id}},<br/>
Nama : {{$tampilkan->nama}}, <br/>
Asal : {{$tampilkan->asal}}, <br/>
Tanggal : {{$tampilkan->tanggal}}<br/>
@stop