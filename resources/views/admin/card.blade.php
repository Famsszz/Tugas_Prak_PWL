@extends('admin.layout')

@section('content')


<div class="card">
    <div class="card-block">
      <h2>Prestasi</h2>
      
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('img/OLIMPIADE UNIVERSITAS SUMATERA UTARA.jpg') }}" class="img-fluid img-responsive" alt="Responsive image">
          <h3 class="h5">North Sumatra University Olympiad</h3>
          <p>March 2020</p>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('img/winner physics.jpg') }}" class="img-fluid img-responsive" alt="Responsive image">
          <h3 class="h5">winner of Physics</h3>
          <p>Oct 2021</p>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('img/INTERNATIONAL SCIENCE OLYMPIAD USU.jpg') }}" class="img-fluid img-responsive" alt="Responsive image">
          <h3 class="h5">International Math Olympiad</h3>
          <p>Oct 2021</p>
        </div>
       </div>
    </div>
  </div>

  @endsection