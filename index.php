<?php

use src\AutoloadException;
use src\Cart;
use src\BirthDayDecorator;
use src\PercentsDecorator;

spl_autoload_register('autoload');

function autoload($path){
    if (preg_match('/\\\\/', $path)){
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    }
    if (!file_exists("{$path}.php")){
        throw new AutoloadException($path);
    }
    require_once "{$path}.php";
}

try {
    $item = new Cart();
    print $item->getPrice() . ' Это 100%'; // 600
    echo '<br/>';

    $item = new BirthDayDecorator(new Cart());
    print $item->getPrice() . ' Это 90%'; // 540
    echo '<br/>';

    $item = new PercentsDecorator(
        new BirthDayDecorator(new Cart()));//540
    print $item->getPrice() . ' Это 80% от 540, скидка на скидку!'; // 432

}catch (\Exception $e){
    echo $e->getMessage();
}