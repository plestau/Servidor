@extends('layouts.footer')
@section('contenido1')
<div class="card">
  <h5 class="card-header">Noticia</h5>
  <div class="card-body">
    <h5 class="card-title">¿Te has enterado?</h5>
    <p class="card-text">Este es el método que usan las famosas para adelgazar</p>
    <a href="#" class="btn btn-primary">Click aqui</a>
  </div>
</div>
@endsection
@section('contenido2')
<h2>¿Te ha gustado?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Si
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    No
  </label>
</div>
@endsection
@extends('layouts.header')

<style>
  #customRange1 {
    display: flex;
    justify-content: space-between;
  }
  .card{
    margin-bottom: 20px;
  }
</style>
