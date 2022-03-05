<?php

namespace Qob\DependencyInjectionPhp\Facades;

use Qob\DependencyInjectionPhp\Container;

class DI
{
  use Facade;

  protected static $className = Container::class;
}
