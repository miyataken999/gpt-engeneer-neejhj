<h1>Products</h1>

<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} ({{ $product->price }})
        </li>
    @endforeach
</ul>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description"><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price"><br><br>
    <input type="submit" value="Create Product">
</form>