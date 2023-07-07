<?php

namespace Neetqw\Patterns\AbstractFactory;

class YandexMapsFactory implements MapFactory
{
    public function mapServiceConnect(): Connection
    {
        return new YandexMapsConnection();
    }

    public function mapServiceGetMethods(): Methods
    {
        return new GoogleMapsMethods($this->mapServiceConnect());
    }
}