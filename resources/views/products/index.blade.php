<h1>Products</h1>

<ul>
    @foreach ($products as $product)
        <li><a href="/product/{{ $product->id }}">{{ $product->name }}</a></li>
    @endforeach
</ul>

