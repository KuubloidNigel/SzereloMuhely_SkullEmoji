@extends('layout')
@section('title', 'Szerelomuhely | Registration')
@section('content')
    <div class='container' style="top:200px; position:relative;">
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        </div>
        @endif
    </div>
      <form  action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px" >
      @csrf
        <div class="mb-3">  
          <label class="form-label">Név</label>
          <input type="text" class="form-control" name="nev">
        </div>
        <div class="mb-3">
          <label class="form-label">Azonosító</label>
          <input type="text" class="form-control" name="azonosito">
        </div>
        <div class="mb-3">  
          <label for="exampleInputPassword1" class="form-label">Jelszó</label>
          <input type="password" class="form-control" name="jelszo">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="role"  value="szerelo" checked> 
            <label class="form-check-label">Szerelő</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="role" value="munkafelvevo"> 
            <label class="form-check-label">Munkafelvevő</label>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
@endsection