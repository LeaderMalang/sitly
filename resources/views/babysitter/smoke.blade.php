@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="mb-4">Do you smoke?</h3>
                <p>Some parents prefer non-smokers</p>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline btn btn-primary">
                                <label class="form-check-label">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="gender" value="1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline btn btn-primary">
                                <label class="form-check-label">
                                    No
                                </label>
                                <input class="form-check-input" type="radio" name="gender"  value="2">
                            </div>
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
