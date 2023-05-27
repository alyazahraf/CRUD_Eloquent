<html>

<head>
    <title>Edit Product Data</title>
</head>

<body>
    <a href="{{ route('products.index') }}">Home</a>
    <br /><br />
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $product->name }}"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="{{ $product->price }}"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity" value="{{ $product->quantity }}"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                    <textarea class="form-control" id="description" name="description">{{ $product->description ?? '' }}</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
