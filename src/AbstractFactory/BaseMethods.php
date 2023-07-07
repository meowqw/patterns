<?php

namespace Neetqw\Patterns\AbstractFactory;

/**
 * Пердаем в метод соединение
 *
 */
abstract class BaseMethods implements Methods
{
    protected Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
}