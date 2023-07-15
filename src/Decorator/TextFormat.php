<?php

namespace Neetqw\Patterns\Decorator;
/**
 * Базовый класс декоратора (не содержит логики)
 */
class TextFormat implements InputFormat
{
    /** @var InputFormat $inputFormat */
    protected InputFormat $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     */
    public function textFormat(string $text): string
    {
        return $this->inputFormat->textFormat($text);
    }
}