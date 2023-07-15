<?php

namespace Neetqw\Patterns\Decorator;

class TextInput implements InputFormat
{
    /**
     * Возвращает текст без какого либо преобразования
     *
     * @param string $text
     * @return string
     */
    public function textFormat(string $text): string
    {
        return $text;
    }
}