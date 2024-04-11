<?php
$name = $_POST["name"];
$id_number = $_POST["id_number"];
$room_number = $_POST["room_number"];
$item_name_1 = $_POST["item_name_1"];
$item_price_1 = $_POST["item_price_1"];
$quantity_1 = $_POST["quantity_1"];
$item_name_2 = $_POST["item_name_2"];
$item_price_2 = $_POST["item_price_2"];
$quantity_2 = $_POST["quantity_2"];

$total_price = ($item_price_1 * $quantity_1) + ($item_price_2 * $quantity_2);

// Send email
$to = "adrixthegreat@gmail.com";
$subject = "New food order";
$message = "Here are the details of the new food order:\n\n";
$message .= "Name: " . $name . "\n";
$message .= "ID Number: " . $id_number . "\n";
$message .= "Room Number: " . $room_number . "\n\n";
$message .= "Order Details:\n";
if ($quantity_1 > 0) {
    $message .= $item_name_1 . ": " . $quantity_1 . " x $" . $item_price_1 . " = $" . ($item_price_1 * $quantity_1) . "\n";
}
if ($quantity_2 > 0) {
    $message .= $item_name_2 . ": " . $quantity_2 . " x $" . $item_price_2 . " = $" . ($item_price_2 * $quantity_2) . "\n";
}
$message .= "Total Price: $" . $total_price . "\n";
$headers = "From: adrixthegreat@gmail.com\r\n";
mail($to, $subject, $message, $headers);

// Output confirmation message
?>
<!DOCTYPE html>
<html>
<head>
    <title>Food Ordering System</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order, <?php echo $name; ?>! Your order has been received and will be delivered to Room <?php echo $room_number; ?>.</p>
</body>
</html>