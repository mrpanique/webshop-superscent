<?php

function showOrders($pdo)
{
    $orders = getOrders($pdo); // asszocialt listak listaja

    foreach ($orders as $row) {
        ?>
        <tr>
            <td>
                <?php echo $row["id"] ?>
            </td>
            <td>
                <?php echo $row["kontakt"] ?>
            </td>
            <td>
                <?php echo $row["datum"] ?>
            </td>
            <td>
                <?php echo $row["osszeg"] ?> Ft
            </td>
            <td>
                <form action="admin_address.php" method="post">
                    <input type="hidden" name="bill_id" value="<?php echo $row['szamlazasi_cim_id'] ?>">
                    <input type="hidden" name="ship_id" value="<?php echo $row['szallitasi_cim_id'] ?>">
                    <button type="submit" class="btn btn-md btn-login mt-0">Cím</button>
                </form>
            </td>
            <td>
                <form action="admin_product.php" method="post">
                    <input type="hidden" name="order-id" value="<?php echo $row["id"] ?>">
                    <button type="submit" class="btn btn-md btn-login mt-0">Termékek</button>
                </form>
            </td>
        </tr>
        <?php
    }
}

function showAddress($pdo, $id)
{
    $address = getAddressFromId($pdo, $id);

    ?>
    <tr>
        <th scope="row">Vezetéknév:</th>
        <td>
            <?php echo $address['vezeteknev'] ?>
        </td>
    </tr>
    <tr>
        <th scope="row">Keresztnév:</th>
        <td>
            <?php echo $address['keresztnev'] ?>
        </td>
    </tr>
    <tr>
        <th scope="row">Város:</th>
        <td>
            <?php echo $address['varos'] ?>
        </td>
    </tr>
    <tr>
        <th scope="row">Irányítószám:</th>
        <td>
            <?php echo $address['ir_szam'] ?>
        </td>
    </tr>
    <tr>
        <th scope="row">Utca, házszám:</th>
        <td>
            <?php echo $address['utca_hazszam'] ?>
        </td>
    </tr>

    <?php
}

function showOrderedProducts($pdo, $order_id)
{
    $products = getOrderedProducts($pdo, $order_id);

    foreach ($products as $row) {
        $details = get_product_from_sku($pdo, $row["SKU"]);

        ?>
        <tr>
            <td>
                <?php echo $details['nev'] ?>
            </td>
            <td>
                <?php echo $details['meret'] ?> ml
            </td>
            <td>
                <?php echo $row["mennyiseg"] ?> db
            </td>
            <td>
                <?php echo $row["ar"] ?> Ft
            </td>
            <td>
                <?php echo $row["SKU"] ?>
            </td>
        </tr>
        <?php
    }
}

function showQuestions($pdo)
{
    $questions = getQuestions($pdo);

    foreach ($questions as $q) {
        $email = getEmailFromId($pdo, $q->user_id);

        ?>
        <tr>
            <td>
                <?php echo $email ?>
            </td>
            <td>
                <div class="admin-question-text">
                    <?php echo $q->text ?> 
                </div>
            </td>
            <td>
                <?php echo $q->date ?> 
            </td>
        </tr>
        <?php
    }
}





