<?php

namespace Neetqw\Patterns\Decorator;

/**
 * Конретный декоратор который реверсирует текст
 */
class ReversTestFormatter extends TextFormat
{
    /**
     * Возвращает реверсированный текст
     *
     * @param string $text
     * @return string
     */
    public function textFormat(string $text): string
    {
        $text = parent::textFormat($text);
        return strrev($text);
    }
}