<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <a href="{{ route('products.index') }}">Go to Home</a>
    <br /><br />
    <form action="{{ route('products.store') }}" method="post" name="form1">
        @csrf
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity"></td>
            <tr>
                <td>Description</td>
                <td>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </td>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>
