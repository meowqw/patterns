<?php

namespace Neetqw\Patterns\FactoryMethod;

/**
 * Интерфейс Ресурса
 */
interface Resource
{
    /**
     * Подключиться к сайту
     *
     * @return void
     */
    public function connect(): void;

    /**
     * Получить контентс с страницы сайта
     *
     * @return string
     */
    public function getContent(): string;
}