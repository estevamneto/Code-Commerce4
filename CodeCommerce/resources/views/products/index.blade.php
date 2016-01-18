@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @foreach($products as $Products)
                <tr>
                    <th>{{ $Products->id }}</th>
                    <th>{{ $Products->name }}</th>
                    <th>{{ $Products->Description }}</th>
                    <th>{{ $Products->price }}</th>
                    <th></th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection