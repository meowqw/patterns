<?php

namespace Neetqw\Patterns\Adapter;

/**
 * Класс адаптер, который связывает Целевой интерфейс и Адаптируемый класс
 */
class XmlData implements Data
{
    private XmlReader $xmlReader;

    public function __construct(XmlReader $xmlReader)
    {
        $this->xmlReader = $xmlReader;
    }

    public function read(): string
    {
        // что то тут с ними делаем
        return $this->xmlReader->readXml();
    }
}