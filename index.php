<?php require 'inc/head.php';

session_start();

if (isset( $_SESSION['name'])) {

    if ($_POST['logout']){
        session_destroy();
        header('location: login.php');
    }


    if ($_GET['add_to_cart']){
        if (($_GET['add_to_cart']) == 46){
            $_SESSION['nuts'] = 1;
            echo "Pecan nuts à été ajouté à votre panier.";
        }if (($_GET['add_to_cart']) == 36){
            $_SESSION['chips'] = 2;
            echo "Chocolate chips à été ajouté à votre panier.";
        }if (($_GET['add_to_cart']) == 58){
            $_SESSION['cookie'] = 3;
            echo "Chocolate cookie à été ajouté à votre panier.";
        }if (($_GET['add_to_cart']) == 32){
            $_SESSION['M&M'] = 4;
            echo "M&M's cookies à été ajouté à votre panier.";
        }
    }


    ?>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=46" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=36" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=58" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=32" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <?php require 'inc/foot.php';

}else{
    echo "La page que vous demandez est réservé à l'élite, et non au bas peuple. Du vent, misérable !";
}
?>
