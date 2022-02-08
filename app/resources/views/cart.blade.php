<div class="cart">
    @if(session('c') != null && count(session('c')) > 0)
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

        @auth
            <li class="list-group-item list-group-item-action mb-1">
                <a href="{{ route('checkout') }}" class="btn d-block btn-success"><i class="fas fa-cart-arrow-down"></i> Check-Out</a>
            </li>
        @endauth
    </ul>
    @else
        <h3 class="text-center">Cart is Empty...</h3>
    @endif
</div>
