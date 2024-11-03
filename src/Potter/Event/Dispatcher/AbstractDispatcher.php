<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

use Symfony\Component\EventDispatcher\EventDispatcher;

abstract class AbstractDispatcher extends EventDispatcher implements DispatcherInterface
{ }
