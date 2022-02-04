@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">WELCOME!</h1>

        <div class="d-flex flex-wrap justify-content-start">

            @foreach($items as $item)
                <div class="p-2 px-4 col-md-4">
                    <div class="card d-inline-block m-0 w-100" style="box-shadow: 5px 5px 10px #4a6fff">
                        <div class="card-header">
                            <img src="{{ url('/img/'.$item->img) }}" class="mx-auto d-block" alt="Profil Bild von Benutzer" style="max-width: 100%">
                        </div>
                        <div class="card-body fw-bold text-center">
                            <p class="fs-3" style="color: red">{{ $item->priceConverted }}</p>
                            <p>{{ $item->name }}</p>
                            <p>Stückzahl: {{ $item->quantity_available }}</p>
                            <form action="{{ route('addItemToCart') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <input type="hidden" name="itemID" value="{{ $item->id }}">
                                <div class="row input-group">
                                    <div class="col-2 offset-2"><input class="number-input" type="number" min="1" max="{{ $item->quantity_available }}" name="amount" required></div>
                                    <div class="col-6"><button type="submit" class="btn btn-cart"><i class="fas fa-shopping-cart mx-1"></i> Add to cart</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
