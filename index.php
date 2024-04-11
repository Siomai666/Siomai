<!DOCTYPE html>
<html>
<head>
    <title>Food Ordering System</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            background-color: #ccc;
        }
        input[type="number"] {
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <form method="post" action="cart.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number" id="id_number" required><br><br>
        <label for="room_number">Room Number:</label>
        <input type="text" name="room_number" id="room_number" required><br><br>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Order</th>
            </tr>
            <tr>
                <td>Siomai</td>
                <td>$70</td>
                <td>
                    <input type="hidden" name="item_name_1" value="Siomai">
                    <input type="hidden" name="item_price_1" value="70">
                    <input type="number" name="quantity_1" value="0">
                </td>
            </tr>
            <tr>
                <td>Rice</td>
                <td>$10</td>
                <td>
                    <input type="hidden" name="item_name_2" value="Rice">
                    <input type="hidden" name="item_price_2" value="10">
                    <input type="number" name="quantity_2" value="0">
                </td>
            </tr>
        </table><br>
        <input type="submit" name="submit" value="Add to cart">
    </form>
</body>
</html>