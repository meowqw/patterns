<?php

namespace Neetqw\Patterns\Composite;

/**
 * Ингредиет внутри продукта - дочерний элемент продукта (лист)
 *
 */
class Ingredient implements ItemInterface
{

    /**
     * Своя логика расчета цены
     *
     * @return int
     */
    public function getPrice(): int
    {
        return 10;
    }
}