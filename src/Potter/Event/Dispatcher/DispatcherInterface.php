<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

use Psr\EventDispatcher\EventDispatcherInterface as PsrEventDispatcherInterface,
    Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

interface DispatcherInterface extends EventDispatcherInterface, PsrEventDispatcherInterface
{
    public function dispatch(object $event, ?string $eventName = null): object;
}
