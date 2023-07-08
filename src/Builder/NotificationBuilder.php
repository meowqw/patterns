<?php

namespace Neetqw\Patterns\Builder;



interface NotificationBuilder
{
    public function setTitle(string $title);

    public function setType(string $type);

    public function setDesc(string $description);

    public function getNotification(): Notification;
}
