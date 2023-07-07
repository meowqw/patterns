<?php

namespace Neetqw\Patterns\AbstractFactory;

class GoogleMapsFactory implements MapFactory
{

    public function mapServiceConnect(): Connection
    {
        return new GoogleMapsConnection();
    }

    public function mapServiceGetMethods(): Methods
    {
        return new GoogleMapsMethods($this->mapServiceConnect());
    }
}