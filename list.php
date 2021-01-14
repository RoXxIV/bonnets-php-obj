<?php
include 'includes/header.php';
 include 'filter.php';

/*
$_GET['price-min']
$_GET['price-max']
*/
$products = $myProducts;

if (!empty($_GET['price-min'])) {
    $priceMin = $_GET['price-min'];

    $products = array_filter($products, function (Bonnet $product) use ($priceMin) {
        return $product->hasMinPrice($priceMin);
    });
}

if (!empty($_GET['price-max'])) {
    $priceMax = $_GET['price-max'];

    $products = array_filter($products, function (Bonnet $product) use ($priceMax) {
        return $product->hasMaxPrice($priceMax);
    });
}

if (!empty($_GET['size'])) {
    $size = $_GET['size'];

    $products = array_filter($products, function (Bonnet $product) use ($size) {
        return $product->hasSize($size);
    });
}

if (!empty($_GET['material'])) {
    $material = $_GET['material'];

    $products = array_filter($products, function (Bonnet $product) use ($material) {
        return $product->hasMat($material);
    });
}



 ?>
<table class="table">
    <thead>
        <!-- En-tête du tableau -->
        <tr>
            <th>Bonnet</th>
            <th>Prix TTC</th>
            <th>Prix HT</th>
            <th>Description</th>
        </tr>
    </thead>
    <?php
        foreach ($products as $items) {
            showItems($items);
        }
    ?>
</table>
<a href="index.php">retour</a>
<?php include 'includes/footer.php'; ?>