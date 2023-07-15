<?php

namespace Neetqw\Patterns\Composite;

trait CompositeTrait
{
    private array $compositeItems = [];

    /**
     * Добавить дочений елемент
     *
     * @param ItemInterface $item
     * @return void
     */
    public function setChild(ItemInterface $item): void
    {
        $this->compositeItems[] = $item;
    }

    public function getPrice(): int
    {
        $price = 0;
        /** @var ItemInterface $compositeItem */
        foreach ($this->compositeItems as $compositeItem) {
            $price += $compositeItem->getPrice();
        }

        return $price;
    }
}