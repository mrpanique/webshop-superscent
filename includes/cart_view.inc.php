<script src="includes/cart.js"></script>
<?php

function show_cart_content($pdo)
{
    $cart_item_qty = count($_SESSION['cart']);

    if ($cart_item_qty === 0) {
        echo '<tr><td style="border: 0px"><h4 class="mt-2 mb-0">A kosár üres.</h4></td></tr>';
    }

    for ($i = 0; $i < $cart_item_qty; $i++) {

        $sku = $_SESSION['cart'][$i];

        $product_details = get_product_from_sku($pdo, $sku);

        ?>
        <tr id="tr_<?php echo $sku; ?>">
            <td>
                <?php print ($product_details["nev"]); ?>
            </td>
            <td>
                <?php print ($product_details["meret"] . " ml"); ?>
            </td>
            <td>
                <?php print ($product_details["ar"] . " Ft"); ?>
            </td>
            <td>
                <input type="number" id="mennyiseg_<?php echo $sku; ?>" name="mennyiseg_<?php echo $sku; ?>"
                    class="form-control cart-mennyiseg" value="1" min="1" max="10"
                    onchange="calculateTotal(<?php echo $product_details['ar']; ?>, '<?php echo $sku; ?>'); calculateFinal()">
            </td>
            <td>
                <span class="total" id="total_<?php echo $sku; ?>">
                    <?php echo $product_details['ar']; ?> Ft <!-- Ezt valtoztatja a calculateTotal -->
                </span>
            </td>
            <td><button type="button" class="btn btn-danger btn-md"
                    onclick="removeFromCart('<?php echo $sku; ?>')">Törlés</button></td>
        </tr>
        <?php
    }
}

function showError()
{
    if (isset($_GET["empty"])) {
        echo '<p class="form-error mt-2 fs-5">Üres kosárral nem lehet rendelni.</p>';
    }
}

?>