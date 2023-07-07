<?php

namespace Neetqw\Patterns\AbstractFactory;

class YandexMapsMethods extends BaseMethods
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
        return ['/yandex/map' => 'Карта'];
    }
}