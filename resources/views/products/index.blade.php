<h1>Products</h1>

<ul>
    @foreach ($products as $product)
        <li><a href="/product/{{ $product->id }}">{{ $product->name }}</a></li>
    @endforeach
</ul>

{{-- Bug 5: Pagination not displayed --}}
{{-- $products->links() --}}  {{-- Uncommented for fix --}}
