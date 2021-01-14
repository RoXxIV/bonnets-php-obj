<?php
    class Bonnet
    {
        const TAILLE = ['S', 'M', 'L', 'XL'];
        const MATIERE = ['laine', 'soie', 'coton', 'cachemire', 'metal'];


        public $name;
        public $description;
        public $image;
        public $price;
        public $priceHT;
        public $id;
        public $size;
        public $material;

        public function __construct(
            $name = 'bonnet',
            $description = 'un bonnet',
            $image = 'img/1.jpg',
            $price = 1,
            $priceHT = 1,
            $id = 0,
            $size = ['M'],
            $material = ['metal']
        ) {
            $this->name = $name;
            $this->description = $description;
            $this->image = $image;
            $this->price = $price;
            $this->priceHT = $priceHT;
            $this->id = $id;
            $this->size = $size;
            $this->material = $material;
        }
        public function hasMinPrice($price)
        {
            return   $this->price >= $price;
        }
        public function hasMaxPrice($price)
        {
            return   $this->price <= $price;
        }

        public function hasSize($size)
        {
            return in_array($size, $this->size);
        }

        public function hasMat($material)
        {
            return in_array($material, $this->material);
        }
    }
