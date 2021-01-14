<?php

    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.
                    Quisque lorem orci, accumsan quis dolor sed, gravida.";
   

    $myProducts = [
        new Bonnet("Bonnet en laine", $description, "img/1.jpg", 10, 6, 1, ['S'], ['laine']),
        new Bonnet("Bonnet en laine bio", $description, "img/2.jpg", 14, 6, 2, ['M'], ['laine', 'soie', 'coton']),
        new Bonnet("Bonnet en laine et cachemire", $description, "img/3.jpg", 20, 6, 3, ['L'], ['cachemire', 'metal']),
        new Bonnet("Bonnet en laine et cachemire", $description, "img/6.jpg", 12, 6, 4, ['XL'], ['metal']),
        new Bonnet("Bonnet en laine", $description, "img/4.jpg", 12, 6, 4, ['S'], ['cachemire']),
        new Bonnet("Bonnet en laine et cachemire", $description, "img/5.jpg", 12, 6, 4, ['M'], ['soie'])
                    
    ];

    $color;
    $connection;
    $pass = 'toto';
    $panier = array();
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
