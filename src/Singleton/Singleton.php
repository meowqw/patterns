<?php

namespace Neetqw\Patterns\Singleton;

class Singleton
{
    private static array $instances = [];

    /**
     * Конструктор Одиночки не должен быть публичным. Однако он не может быть
     * приватным, если мы хотим разрешить создание подклассов.
     */
    protected function __construct() { }

    /**
     * Клонирование и десериализация не разрешены для одиночек.
     */
    protected function __clone() { }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * Метод, используемый для получения экземпляра Одиночки.
     */
    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {

            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}