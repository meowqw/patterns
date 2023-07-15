<?php

namespace Neetqw\Patterns\Composite;

interface CompositeInterface extends ItemInterface
{
    // установить дочерний элемент
    public function setChild(ItemInterface $item);
}