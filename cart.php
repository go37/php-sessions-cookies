<?php

require 'inc/head.php';
require 'inc/data/products.php';

if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        if (empty($_SESSION['product'])) {
            echo "Votre panier est vide !";
        } else {
            $products = $_SESSION['product'];
            echo "Votre panier contient :<br>";
            foreach ($products as $key => $product) {
                echo "<img src='assets/img/product-" . $key . ".jpg' style='width: 50px; margin: 10px' alt='" . $catalog[$key]['name'] . "'>" . $catalog[$key]['name'] . " : " . $product . "<br>";
            }
        }

        ?>
    </div>
</section>
<?php

require 'inc/foot.php';

?>