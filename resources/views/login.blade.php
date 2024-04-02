@extends('layout')
@section('title', 'Szerelomuhely | Login')
@section('content')
    <div class='container' style="top:200px; position:relative;">
      <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px" >
      @csrf
        <div class="mb-3">
          <label class="form-label">Azonosító</label>
          <input type="text" class="form-control" name="azonosito">
        </div>
        <div class="mb-3">  
          <label for="exampleInputPassword1" class="form-label">Jelszó</label>
          <input type="password" class="form-control" name="jelszo">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label">Remember me</label>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
@endsection