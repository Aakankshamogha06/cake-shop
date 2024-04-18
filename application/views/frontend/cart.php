<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php foreach ($cart_items as $item): ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td>
                <form method="post" action="<?php echo base_url('cart/update_cart'); ?>">
                    <input type="hidden" name="cart[<?php echo $item['rowid']; ?>][rowid]" value="<?php echo $item['rowid']; ?>">
                    <input type="number" name="cart[<?php echo $item['rowid']; ?>][qty]" value="<?php echo $item['qty']; ?>">
                    <input type="submit" value="Update">
                </form>
            </td>
            <td><?php echo $item['subtotal']; ?></td>
            <td><a href="<?php echo base_url('cart/remove_from_cart/'.$item['rowid']); ?>">Remove</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
