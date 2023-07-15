<?php

namespace Neetqw\Patterns\Decorator;

/**
 * Интерфейс компонента.
 */
interface InputFormat
{
    public function textFormat(string $text): string;
}