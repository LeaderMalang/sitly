@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="mb-4">Where do you live?</h3>
                <p>so we can show you matches in your area</p>
                <h6>Your address will be not share with others</h6>
                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" name="address" placeholder="City">
                        </div>
                        <div class="col-8 mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Street">
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" class="form-control" name="address" placeholder="No">
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{route('webRole')}}" class="btn btn-danger">Next</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
