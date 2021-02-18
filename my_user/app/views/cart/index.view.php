<h2 class="h2">カート一覧</h2>
<a href="clear.php" class="btn btn-danger">Clear</a>
    <div class="container mt-3">
        <table class="table">
            <thead>
                <th>Item</th>
                <th>Amount</th>
                <th>Total Price</th>
            </thead>
            <?php foreach ($cart_items as $cart_item) : ?>
                <tr>
                    <td>
                        <?= $cart_item['item']['name'] ?>
                    </td>
                    <td>
                        <?= $cart_item['amount'] ?>
                    </td>
                    <td>
                        <?= $cart_item['total_price'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>