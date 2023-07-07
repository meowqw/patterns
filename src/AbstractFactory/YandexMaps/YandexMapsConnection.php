<?php

namespace Neetqw\Patterns\AbstractFactory;

class YandexMapsConnection implements Connection
{
    /**
     * Возвразаем соединение
     *
     * @return string
     */
    public function getConnect(): string
    {
        return 'Соединение с yandex maps';
    }
}