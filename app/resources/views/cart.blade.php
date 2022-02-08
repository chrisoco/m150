<div class="cart">

    <h3 class="text-center">CART</h3>
    <ul id="cart-items" class="list-group">
        @foreach(session('c') as $key => $value)
            <li class="list-group-item list-group-item-action mb-1">
                <img src="{{ url('/img/'.\App\Models\Item::find($key)->img) }}" style="height: 40px">
                <span class="fw-bold">{{ \App\Models\Item::find($key)->name }}, </span>
                <span>Stück: {{ $value }}</span>
                <a href="{{ route('delItemFromCart', $key) }}" class="btn btn-danger float-end"><i class="fas fa-trash-alt"></i></a>
            </li>
        @endforeach

        <li class="list-group-item list-group-item-action mb-1">
            <a href="" class="btn d-block btn-success"><i class="fas fa-cart-arrow-down"></i> Check-Out</a>
        </li>
    </ul>

</div>
