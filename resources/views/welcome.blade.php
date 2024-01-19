@extends('components.navbar')

@section('content')
<div class="d-sm-flex align-items-center justify-content-around w-100 px-" style="height: 100vh;">
    <div class="col-md-4 mx-auto mb-4 mb-sm-0 headline">
      <span class="text-secondary text-uppercase"></span>
      <p class="display-6 my-4 font-weight-bold">Dites adieu aux  CV  traditionnels avec<span style="color: #F76300;"> notre plateforme de CV vidéo révolutionnaire.</span></p>
      <a href="#" class="btn px-5 py-3 text-white mt-3 mt-sm-0" style="border-radius: 30px; background-color: #F76300;">En Savoir plus</a>
    </div>

      <div class="col-md-6 ">
        <img src="{{ asset('Images/img2.png') }}" alt="" srcset="" style="width: 80%">
    </div>
    </div>
  </div>
@endsection