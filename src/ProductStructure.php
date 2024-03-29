<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $products_array = [];
        $count = 1;
        $array = array_count_values(static::products);
        foreach($array as $key => $item){
            $product_item = explode('-', $key);
            $products_array[$product_item[0]][$product_item[1]] =$item;  
        }
        return $products_array;
    }
}
