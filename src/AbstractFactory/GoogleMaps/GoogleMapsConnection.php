<?php

namespace Neetqw\Patterns\AbstractFactory;

class GoogleMapsConnection implements Connection
{
    /**
     * Возвразаем соединение
     *
     * @return string
     */
    public function getConnect(): string
    {
        return 'Соединение с google maps';
    }
}