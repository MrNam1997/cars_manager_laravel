@extends('home')
@section('title','Edit car')
@section('content')
    <div class="container">
        <div class="col-md">
            <form method="post" action="{{route('cars.update',$car->id)}}">
                @csrf

                <h1 class="text-center">Edit car</h1>

                <div class="col-md-6 offset-md-3">
                    <label>Car name</label>
                    <input type="text" class="form-control" name="car_name" value="{{$car->Car_name}}" required>
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Origin</label>
                    <input type="text" class="form-control" name="origin" value="{{$car->Origin}}"required>
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Vendor</label>
                    <input type="text" class="form-control" name="vendor" value="{{$car->Vendor}}" required>
                </div>

                <div class="col-md-6 offset-md-3">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="amount" value="{{$car->Amount}}"required>
                </div>

                <div class="col-md-6 offset-md-3">
                    <br>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>

            </form>
        </div>

    </div>
@endsection
