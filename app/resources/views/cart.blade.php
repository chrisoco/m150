<div class="cart">
    <h3 class="text-center">CART</h3>
    <ul id="cart-items">
        @foreach(session('c') as $key => $value)
            <li>{{ 'ID:'.$key.' Stück: '. $value }}</li>
        @endforeach

    </ul>
</div>
