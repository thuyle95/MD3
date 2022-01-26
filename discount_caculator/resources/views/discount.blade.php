<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>

<body>
    <form method="post" action="{{route('discount')}}">
        @csrf
        <tr>
            <td>
                Product Description <input type="text" name="productDescription">
            </td>
            <td>
                List Price <input type="text" name="price">
            </td>
            <td>
                Discount Percent <input type="text" name="discountPercent">
            </td>
        </tr>
        <button type="submit">Calculate</button>
    </form>
</body>

</html>