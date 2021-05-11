@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
             <div class="col-md-5 text-center">
                 <div class="logo">
                     <img src="{{asset('img/logo.png')}}" alt="">
                 </div>
                 <div class="welcome-screen">
                     <img src="{{asset('img/welcome.png')}}" alt="">
                     <h3>Welcome, {{ucfirst(Auth::user()->name)}}</h3>
                     <h3>Lets Find the best babysitter or job in your area</h3>
                     <p class="lead mb-0 mt-4">To do that we'll ask you a few questions</p>
                     <p class="lead">This only takes a few minutes</p>
                     <a href="{{route('webRole')}}" class="btn btn-primary">Next</a>
                 </div>
             </div>
        </div>
    </div>
@endsection
