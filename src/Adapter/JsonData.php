<?php

namespace Neetqw\Patterns\Adapter;

class JsonData implements Data
{
    /**
     * Возвращает данные в формате json
     *
     * @return string
     */
    public function read(): string
    {
        return 'json data';
    }

}