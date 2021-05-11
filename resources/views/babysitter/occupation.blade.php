@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h3 class="mb-4">What description fit you the best?</h3>
                <form action="" method="post" class="guardian-selector">
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            In High Shcool
                        </label>
                        <input class="form-check-input" type="radio" name="language" value="1">
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            Student
                        </label>
                        <input class="form-check-input" type="radio" name="language" value="1">
                    </div>
                    <div class="form-check btn btn-primary btn-block">
                        <label class="form-check-label">
                            Unemployed
                        </label>
                        <input class="form-check-input" type="radio" name="language" value="1">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
