<!-- Mini Cart Products -->
<ul class="mini-cart-products">
    @php
        $sum=0;
    @endphp
    @foreach ($wishlilst as $wish)
    <li>
        <a class="image"> <img src="{{ asset('assets/shop/'.$wish->product->image) }}" alt="Product"> </a>
        <div class="content"> <a href="#" class="title">{{ $wish->product->title }}</a> <span class="price">Price: ${{ $wish->product->price }}</span> <span class="qty">Qty: 01</span> </div>
        <button class="remove"> <i class="fa fa-trash-o"></i> </button>
    </li>
    @php
        $sum=$sum+$wish->product->price;
    @endphp
    @endforeach
</ul>
<!-- Mini Cart Bottom -->
<div class="mini-cart-bottom">
    <h4 class="sub-total">Total:
        <span>${{ $sum }}</span>
    </h4>
    <div class="button"> <a href="{{ route('checkout') }}">CHECKOUT</a> </div>
</div>