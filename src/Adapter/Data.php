<?php

namespace Neetqw\Patterns\Adapter;

/**
 * Целевой интерфейс предоставляет интерфейс, которому следуют классы вашего
 * приложения.
 */
interface Data
{
    /**
     * Возвращает данные
     */
    public function read();
}