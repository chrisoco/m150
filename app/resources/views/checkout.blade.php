@extends('layouts.app')

@section('content')
    <div class="container">

        @if(session('c') != null && count(session('c')) > 0)
            <h1 class="my-4 text-center">Items in your Cart:</h1>

            <ul id="cart-items" class="list-group col-8 offset-2">

                @foreach(session('c') as $key => $value)
                    <li class="list-group-item list-group-item-action mb-1">
                        <img src="{{ url('/img/'.\App\Models\Item::find($key)->img) }}" style="height: 40px">
                        <span class="fw-bold">{{ \App\Models\Item::find($key)->name }}, </span>
                        <span>Stück: {{ $value }}</span>
                        <a href="{{ route('delItemFromCart', $key) }}" class="btn btn-danger float-end"><i class="fas fa-trash-alt"></i></a>
                        <span class="float-end fw-bold" style="margin-right: 3rem; margin-top: 8px">{{ \App\Models\Item::find($key)->calcPriceFormatted($value) }}</span>
                    </li>
                @endforeach
                    <li class="list-group-item list-group-item-action mb-1">
                        <span class="fw-bold float-end text-decoration-underline" style="margin-right: 5.5rem;">TOTAL: {{ $total }} CHF</span>
                    </li>
                @auth
                    <li class="list-group-item list-group-item-action mb-1">
                        <a href="{{ route('pay') }}" class="btn d-block btn-success"><i class="fas fa-cart-arrow-down"></i> Check-Out</a>
                    </li>
                @endauth

            </ul>
        @else
            <h1 class="my-4 text-center">No Items in your Cart..</h1>
        @endif

    </div>
@endsection
