<?php

abstract class Item {

    abstract function getPrice();

}

class Cart extends Item {

    private $price = 600;

    public function getPrice() {
        return $this->price;
    }
}

abstract class ItemDecorator extends Item {

    protected $item;
    protected $percent;

    public function __construct( Item $item ) {
        $this->item = $item;
    }
}

class BirthDayDecorator extends ItemDecorator
{
    protected $percent = 10;
    public function getPrice()
    {
        return $this->item->getPrice() - ($this->item->getPrice() * $this->percent / 100);
    }

}

class PercentsDecorator extends ItemDecorator
{
    protected $percent = 20;

    public function getPrice()
    {
        return $this->item->getPrice() - ($this->item->getPrice() * $this->percent / 100);
    }

}

$item = new Cart();
print $item->getPrice(); // 600
echo '<br/>';

$item = new BirthDayDecorator( new Cart() );
print $item->getPrice(); // 540
echo '<br/>';

$item = new PercentsDecorator(
             new BirthDayDecorator( new Cart() ));
print $item->getPrice(); // 270