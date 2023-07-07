<?php

namespace Neetqw\Patterns\FactoryMethod;

/**
 * Класс создатель
 */
abstract class SiteParser
{
    /**
     * Фабричный метод который возвращет Интерфейс Ресурс (абстракный)
     *
     * @return Resource
     */
    abstract public function getResource(): Resource;

    public function parse(): string
    {
        // вызов фабричного метода
        $resource = $this->getResource();
        $resource->connect();
        return $resource->getContent();
    }
}
