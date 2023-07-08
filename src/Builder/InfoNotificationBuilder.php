<?php

namespace Neetqw\Patterns\Builder;

class InfoNotificationBuilder implements NotificationBuilder
{
    private Notification $notification;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset(): void
    {
        $this->notification = new Notification();
    }

    public function setTitle(string $title): void
    {
        $this->notification->title = $title;
    }

    public function setType(string $type): void
    {
        $this->notification->type = $type;
    }

    public function setDesc(string $description): void
    {
        $this->notification->description = $description;
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }
}