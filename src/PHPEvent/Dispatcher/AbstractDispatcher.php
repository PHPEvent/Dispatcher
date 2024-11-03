<?php

declare(strict_types=1);

namespace PHPEvent\Dispatcher;

use Symfony\Component\EventDispatcher\EventDispatcher;

abstract class AbstractDispatcher extends EventDispatcher implements DispatcherInterface
{ }
