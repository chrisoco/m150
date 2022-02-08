@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center">

        <div class="mt-5">
            <div class="card d-inline-block m-0 w-100" style="box-shadow: 5px 5px 10px #4a6fff">
                <div class="card-body fw-bold text-center">
                    <p class="fs-3" style="color: green">Thank you for your purchase! :)</p>
                </div>
            </div>
            <div class="mt-3">Return to <a href="{{ route('index') }}">Index</a></div>
        </div>


    </div>

@endsection
