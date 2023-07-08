<?php

namespace Neetqw\Patterns\Builder;

class NotificationDirector
{
    private NotificationBuilder $notificationBuilder;

    public function setBuilder(NotificationBuilder $notificationBuilder): void
    {
        $this->notificationBuilder = $notificationBuilder;
    }

    public function buildDefaultInfoNotification(): void
    {
        $this->notificationBuilder->setTitle('title');
        $this->notificationBuilder->setType('type');
        $this->notificationBuilder->setDesc('desc');
    }

}