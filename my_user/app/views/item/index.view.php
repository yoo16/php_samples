<h2 class="h2">商品ページ</h2>
<div class="container mt-3">
    <div class="row">
        <?php if (isset($items)) : ?>
            <?php foreach ($items as $item) : ?>
                <div class=" col-md-4 mb-1 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <img src="../images/now_printing.jpg" alt="" width="100%">
                            </div>
                            <div class="text-center m-2">
                                <p>
                                    <?= $item['name'] ?>
                                </p>
                                <p>
                                    &yen;<?= $item['price'] ?>
                                </p>
                            </div>
                            <p class="text-center m-2">
                                <a href="../cart/add.php?item_id=<?= $item['id'] ?>" class="btn btn-danger">カートに入れる</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>