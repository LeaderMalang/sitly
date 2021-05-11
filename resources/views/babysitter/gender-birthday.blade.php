@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="mb-4">Your Gender and date of birth</h3>
                <form action="" method="post">
                   <div class="row no-gutters">
                       <div class="col-6">
                           <div class="form-check form-check-inline btn btn-primary">
                               <label class="form-check-label">
                                   Female
                               </label>
                               <input class="form-check-input" type="radio" name="gender" value="1">
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-check form-check-inline btn btn-primary">
                               <label class="form-check-label">
                                   Male
                               </label>
                               <input class="form-check-input" type="radio" name="gender"  value="2">
                           </div>
                       </div>
                   </div>
                    <h6 class="my-3">Your date of birth</h6>
                    <div class="row">
                        <div class="col-md-3">
                            <select name="day" class="form-control">
                                <option value="">Day</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="day" class="form-control">
                                <option value="">Month</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select name="day" class="form-control">
                                <option value="">Year</option>
                            </select>
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
