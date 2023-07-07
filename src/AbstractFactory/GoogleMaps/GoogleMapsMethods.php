<?php

namespace Neetqw\Patterns\AbstractFactory;

class GoogleMapsMethods extends BaseMethods
{
    /**
     * Возвращаем методы
     *
     * @return string[]
     */
    public function getMethodsList(): array
    {
        // подключаемся
        $connection = $this->connection;
        return ['/google/map' => 'Карта'];
    }
}