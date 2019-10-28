@extends('home')
@section('title','Create car')
@section('content')
    <div class="container">
        <div class="col-md">
            <form method="post" action="{{route('cars.store')}}">
                @csrf

                <h1 class="text-center">Create a new car</h1>

                <div class="col-md-6 offset-md-3">
                    <label>Car name</label>
                    <input type="text" class="form-control" name="car_name">
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Origin</label>
                    <input type="text" class="form-control" name="origin">
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Vendor</label>
                    <input type="text" class="form-control" name="vendor">
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="amount">
                </div>

                <div class="col-md-6 offset-md-3">
                    <br>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>

            </form>
        </div>

    </div>

@endsection
