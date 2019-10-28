@extends('home')
@section('title','List cars')
@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <h1 class="text-center text-uppercase">Cars list from Korea</h1>
            <table class="table table-striped table-dark">
                <thead>
                <tr class="text-center">
                    <a href="{{route('cars.create')}}" class="btn btn-primary">Create</a>
                    <th scope="col">#</th>
                    <th scope="col">Car name</th>
                    <th scope="col">Origin</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Option</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @if(count($cars)==0)
                    <tr>No data</tr>
                @else
                    @foreach($cars as $key=> $car)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$car->Car_name}}</td>
                            <td>{{$car->Origin}}</td>
                            <td>{{$car->Vendor}}</td>
                            <td>{{$car->Amount}}</td>
                            <td>
                                <a href="{{route('cars.edit',$car->id)}}" class="btn btn-warning">Edit</a>
                                &nbsp;
                                &nbsp;
                                <a  href="{{route('cars.destroy', $car->id)}}" class="btn btn-danger" onclick="return confirm('o you want to delete record!')">delete</a>
                            </td>
                        </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
