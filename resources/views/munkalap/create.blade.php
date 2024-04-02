@extends('layout')
@section('title', 'Szerelomuhely | Login')
@section('content')
<form class="ms-auto me-auto mt-5   " style="width: 500px; top: 50%; position: relative;">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput">
          <label for="floatingInput">Szerelő azonosito</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control">
          <label for="floatingPassword">Dátum</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput">
          <label for="floatingInput">Munkafelvevő azonosito</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput">
            <label for="floatingInput">Gepjármű rendszáma</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput">
            <label for="floatingInput">Ár</label>
        </div>
        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Fizetési mód:</option>
            <option value="1">Bankkártya</option>
            <option value="2">Készpénz</option>
          </select>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Munkalap lezárása</label>
        </div>
        <button type="submit" class="btn btn-primary">Munkalap létrehozása</button>
</form>
@endsection