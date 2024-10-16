@extends('master')
@section('title-page', 'Paket MySCH.ID')

@section('content')



<form action = "/insertdata">
  <div class="mb-3">
 
    <label for="exampleInputEmail1" class="form-label">NAMA KATEOGRI</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <select id="package_type" name="package_type" required>
            <option value="1">Profesional</option>
            <option value="2">Exclusive</option>
            <option value="3">Custom</option>
            <option value="4">yayasan</option>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection