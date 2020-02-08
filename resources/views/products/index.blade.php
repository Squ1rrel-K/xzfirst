@extends('products.default')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($results as $result)
                {{$result->name}}
                @endforeach
        </div>
    </div>
    @endsection
