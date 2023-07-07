<?php

namespace Neetqw\Patterns\AbstractFactory;

interface MapFactory
{
    /**
     * Создаем соединение
     *
     * @return Connection
     */
    public function mapServiceConnect(): Connection;

    /**
     * Возвращаем методы
     *
     * @return Methods
     */
    public function mapServiceGetMethods(): Methods;
}