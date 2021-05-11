@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h3 class="mb-4">Choose 1 to 3 things that describes you</h3>
                <form action="" method="post" class="guardian-selector">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Calm
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Creative
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Patient
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Kind
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Caring
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check btn btn-primary btn-block">
                                <label class="form-check-label">
                                    Strict
                                </label>
                                <input class="form-check-input" type="checkbox" name="language" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{route('webRole')}}" class="btn btn-danger">Next</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
