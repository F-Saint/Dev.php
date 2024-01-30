<?php 

include '../partials/header.php';
include 'C:\xampp\htdocs\PHP\PHP_SQY_ESHOP\config\cULR.php';

?>

<div class="wrapper">
    <h1>Page de produits</h1>

    <ul class="product-list">
        <?php foreach($products as $product) :  ?>
            <li class='monproduit'>
                <a href="home.view.php?test=2">Lien test</a>
                <a href="product.view.php?product=<?= $product['id'] ?>"><img class="imgproduct" src="<?= $product['image'] ?>" alt=""></a>
                <h2><?= $product['title'] ?></h2>
                <h3><?= substr($product['description'], 0, 50) ?> ...</h3>
                <h2><?= $product['price'] ?> €</h2>
                <button><a>Ajouter au panier</a></button>
            </li>
        <?php endforeach ?>
   </ul>    
</div>

<?php include '../partials/footer.php' ?>
