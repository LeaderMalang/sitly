@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h3 class="mb-4">Select what applies you?</h3>
                <form action="" method="post" class="guardian-selector">
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            I have a first aid certificate
                        </label>
                        <input class="form-check-input" type="checkbox" name="language" value="1">
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            I can present a certificate of good behaviour
                        </label>
                        <input class="form-check-input" type="checkbox" name="language" value="1">
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            I have a driver license
                        </label>
                        <input class="form-check-input" type="checkbox" name="language" value="1">
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            I have a car
                        </label>
                        <input class="form-check-input" type="checkbox" name="language" value="1">
                    </div>
                    <div class="mt-2">
                        <a href="{{route('webRole')}}" class="btn btn-danger">Next</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
