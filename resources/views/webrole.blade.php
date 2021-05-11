@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h3 class="mb-4">Sono:</h3>
                <form action="" method="post" class="guardian-selector">
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label" for="exampleRadios1">
                            Parents
                        </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label" for="exampleRadios2">
                            Babysitter
                        </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                    </div>
                </form>
                <p class="lead mt-3 text-left">* Babysitter: Hai almeno 14 anni e ami prenderti cura dei bambini</p>
            </div>
        </div>
    </div>
@endsection
