@component('mail::message')


Dear Mr./Ms. {{ $purchase->user->name }}

Thank you for your purchase. Your Order is shown below:


<table style="width: 100%">
    <tr>
        <th>IMG</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Single Price</th>
    </tr>
    @foreach($purchase->purchaseHasItems as $hasItem)
        <tr>
            <td style="text-align: center"><img src="{{ url('/img/'.$hasItem->item->img) }}" class="mx-auto d-block" style="max-width: 100px"></td>
            <td style="text-align: center">{{ $hasItem->item->name }}</td>
            <td style="text-align: center">{{ $hasItem->quantity }}x</td>
            <td style="text-align: center">{{ $hasItem->item->price }}</td>
        </tr>
    @endforeach
</table>
<br><br>
<div><b>Total: <span style="text-decoration-line: underline; text-decoration-style: double;">{{ $purchase->price }} CHF</span></b></div>


<br><br>
We look forward to your next visit,<br>
{{ config('app.name') }}

@endcomponent
