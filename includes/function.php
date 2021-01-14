 <?php

    function myTva($price)
    {
        return number_format($price / 1.2, 2, ',', '');
    }
    //affiche la liste
    function showItems($item)
    {
        if ($item->price <= 12) {
            $color = "green";
        } else {
            $color = "blue";
        }
        echo    "<tr>
                <td> " . $item->name . " </td> 
                <td style='color:$color;'> " . number_format($item->price, 1, '.', '') . " € </td> 
                <td style='color:$color;'>" . myTva($item->price) . " € </td> 
                <td>" . $item->description . "</td>
            </tr>";
    }

    function showCards($items)
    {
        echo    " <div id='card' class='col-md-4'>
                        <div class='card' style='width: 18rem;padding:20px;'>
                            <img src='" . $items->image . "' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $items->name . "</h5>
                                        <p class='card-text'>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Duis a leo diam.Quisque lorem orci, accumsan quis dolor sed, gravida
                                        </p>
                                        <p>
                                            <span>" . myTva($items->price) . "<sup>eur</sup></<span>
                                        </p>
                                        <a class='btn' href='cart-add.php?id=".$items->id."'>Ajouter au panier</a>
                                </div>
                        </div>
                    </div>";
    }





    function getCartContent()//: array
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        return $_SESSION['cart'];
        // si rien n'a été ajouté au panier , prend la valeur d'un tableau vide
    }

    //recherche element dans
    function findInProducts($products, $id)
    {
        foreach ($products as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }

        return null; //Retourne l'élément courant du tableau : $results[0]
    }
    //ajoute au panier
    function addToCart($id)//: int
    {
        getCartContent();

        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 0;
        }
        $_SESSION['cart'][$id]++;

        return $_SESSION['cart'][$id];
    }

    function removeOneFromCart($product)//: int
    {
        //on recupere le contenu du panier actuel
        getCartContent();

        $id = $product->id;

        
        if (!isset($_SESSION['cart'][$id])) {
            return 0;
        }
        $_SESSION['cart'][$id]--;

        if ($_SESSION['cart'][$id] <= 0) {
            unset($_SESSION['cart'][$id]);
            return 0;
        }

        return $_SESSION['cart'][$id];
    }

function emptyCart()//: void
{
    $_SESSION['cart'] = [];
}
