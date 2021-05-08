<?php
    // 商品とはこういうものであるという設計図
    class Item{
        public $id;
        public $name;
        public $image;
        public $price;
        public $stock;
        public $description;
        public $flag;
        public $created_at;
        
        public function __construct($name='', $image='', $price='', $stock='', $description='', $flag=''){
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->stock = $stock;
            $this->description = $description;
            $this->flag = $flag;
        }
    }
?>