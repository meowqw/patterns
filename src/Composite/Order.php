<?php

namespace Neetqw\Patterns\Composite;

/**
 * Заказ - корневой елемент
 */
class Order implements CompositeInterface
{
    // методы реалтзованы внутри трейта
    use CompositeTrait;
}