<div class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-heading">カートの中身</div>
                <div class="table-cart">
                    <table>
                        <thead>
                            <tr>
                                <th>商品名</th>
                                <th>日付</th>
                                <th>値段</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 8; $i++) : ?>
                                <tr>
                                    <td>
                                        <div class="display-flex align-center">
                                            <div class="img-product">
                                                <i class="fas fa-bus fa-4x busicon"></i>
                                            </div>
                                            <div class="name-product">
                                                夜行バスこべぇ行き
                                                <br>A-42
                                            </div>
                                            <div class="price">
                                                <?php echo "￥" . number_format(3000); ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-count">
                                        <p>2020/9/1 23:00~ 2020/9/2 07:00</p>
                                    </td>
                                    <td>
                                        <div class="total">
                                            <?php echo "￥" . number_format(3000); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" title="">
                                            <img src="images/icons/delete.png" alt="" class="mCS_img_loaded">
                                        </a>
                                    </td>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-cart -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="cart-totals">
                    <h3>カートの合計</h3>
                    <form action="#" method="get" accept-charset="utf-8">
                        <table>
                            <tbody>
                                <tr>
                                    <td>小計</td>
                                    <td class="subtotal"><?php echo "￥" . number_format(3000); ?></td>
                                </tr>
                                <tr>
                                    <td>税金</td>
                                    <td class="subtotal"><?php echo "￥" . number_format(3000); ?></td>
                                </tr>
                                
                                <tr class="total-row">
                                    <td>合計金額</td>
                                    <td class="price-total"><?php echo "￥" . number_format(3000); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-cart-totals">
                            <a href="index.php?page=download" class="checkout round-black-btn" title="">購入を確定する</a>
                        </div>
                        <!-- /.btn-cart-totals -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /.cart-totals -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</div>
<div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div>