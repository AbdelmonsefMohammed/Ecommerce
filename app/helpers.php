<?php

function getStockLevel($quantity)
{
    if($quantity > setting('site.stock_threshold')){
        $stockLevel = 'In Stock';
        $stockLevelColor = '#a5d549';
    }elseif($quantity <= setting('site.stock_threshold') && $quantity > 0){
        $stockLevel = 'Low on stock';
        $stockLevelColor = '#ff6600';
    }else{
        $stockLevel = 'Out of stock';
        $stockLevelColor = '#FF0000';
    }
    return [$stockLevel,$stockLevelColor];
}