@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="mb-4">Introduce yourself?</h3>
                <p>we are nearly there! write something about yourself and your children</p>
                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-12 mb-3">
                            <textarea name="about" class="form-control" cols="30" rows="10" placeholder="About Yourself"></textarea>
                            <p class="lead text-primary mt-3 mb-0">You have 900 characters left</p>
                        </div>
                    </div>
                    <a href="{{route('webRole')}}" class="btn btn-danger">Next</a>
                </form>
            </div>
        </div>
    </div>
@endsection
