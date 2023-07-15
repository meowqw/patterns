<?php

namespace Neetqw\Patterns\Composite;

/**
 * Продукт внутри заказа - дочерний елемент заказа
 */
class Product implements CompositeInterface
{
    use CompositeTrait;
}