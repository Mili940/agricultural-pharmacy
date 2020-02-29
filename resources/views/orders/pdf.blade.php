<h1 class="h1">
{{--    {{ $order->user-t t>name }}--}}
</h1>

<h1 class="h2">Ukupno:</h1>

    @foreach($orders as $order)
        <div class="my-4">
            <span>{{$order->created_at }}</span>
            <div class="pt-1">
                @foreach($order->products as $product)
                    <div class="{{ $order->payed ? 'payed-true' : '' }}">
                        <span>{{ $product->name }}</span>
                        <span>{{$product->pivot->quantity}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

<style>
    .h1 {
        font-size: 20px;
    }
    .h2 {
        font-size: 18px;
    }
    .my-4 {
        margin: 20px 0;
    }
    .pt-1 {
        padding-top: 5px;
    }
</style>
