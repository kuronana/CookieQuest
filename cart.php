<?php require 'inc/head.php';


session_start();

if (isset( $_SESSION['name'])) {


    if ($_POST['logout']){
        session_destroy();
        header('location: login.php');
    }


    if (isset($_SESSION['nuts'])){
        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
        echo    '<figure class="thumbnail text-center">';
        echo        '<img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">';
        echo        '<figcaption class="caption">';
        echo            '<h3>Pecan nuts</h3>';
        echo            '<p>Cooked by Penny !</p>';
        echo        '</figcaption>';
        echo    '</figure>';
        echo '</div>';
    }


    if (isset($_SESSION['chips'])){
        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
        echo    '<figure class="thumbnail text-center">';
        echo        '<img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">';
        echo        '<figcaption class="caption">';
        echo            '<h3>Chocolate chips</h3>';
        echo            '<p>Cooked by Bernadette !</p>';
        echo        '</figcaption>';
        echo    '</figure>';
        echo '</div>';
        }


    if (isset($_SESSION['cookie'])){
        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
        echo    '<figure class="thumbnail text-center">';
        echo        '<img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">';
        echo        '<figcaption class="caption">';
        echo            '<h3>Chocolate cookie</h3>';
        echo            '<p>Cooked by Bernadette !</p>';
        echo        '</figcaption>';
        echo    '</figure>';
        echo '</div>';
    }


    if (isset($_SESSION['M&M'])){
        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
        echo    '<figure class="thumbnail text-center">';
        echo        '<img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">';
        echo        '<figcaption class="caption">';
        echo            '<h3>M&M\'s cookies</h3>';
        echo            '<p>Cooked by Penny !</p>';
        echo        '</figcaption>';
        echo    '</figure>';
        echo '</div>';
    }


    ?>
    <section class="cookies container-fluid">
        <div class="row">

        </div>
    </section>
    <?php require 'inc/foot.php';

}else{
    echo "La page que vous demandez est réservé à l'élite, et non au bas peuple. Du vent, misérable !";
}

?>
