<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('container')
  <div class="jumbotron text-center mb-5">
    <div style="max-height: 300px; overflow:hidden;" class="text-center">
      <img src="img/{{ $image }}" alt="{{ $name }}" width="250" class="img-thumbnail rounded-circle">
    </div>
  </div>

  <h2 class="text-center fw-semibold fs-20 mb-5">Welcome to Yuk Libur<i class="bi bi-balloon"></i></h2>

  <p class="fs-5">We from YukLibur will invite you to vacation all over the world, starting from Indonesia, Japan, and France. Our facilities are very affordable, there are various kinds of food, VIP vehicles/hotels and much more, and we will also serve you until you are satisfied so you don't have to hesitate if you want to ask us for help from the yuklibur team. Thank you!!</p>

  <div class="d-block mt-5 mb-5">
    <h1><i class="bi bi-file-person"></i> Team</h1>
    <div class="row">
      <div class="col-lg-4 mt-5">
        <img class="img-top rounded-circle" width="200" height="200" src="https://source.unsplash.com/jh7QNwyqgQ8?" role="img" aria-label="Placeholder: 140x140">

        <h2 class="fw-normal mt-5">Issabella</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>

      <div class="col-lg-4 mt-5">
        <img class="img-top rounded-circle" width="200" height="200" src="https://source.unsplash.com/d2MSDujJl2g?" role="img" aria-label="Placeholder: 140x140">

        <h2 class="fw-normal mt-5">Jonathan</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      </div>
      
      <div class="col-lg-4 mt-5">
        <img class="img-top rounded-circle" width="200" height="200" src="https://source.unsplash.com/NR705beN_CU?" role="img" aria-label="Placeholder: 140x140">

        <h2 class="fw-normal mt-5">Marcell</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div>
    </div>
  </div>
@endsection