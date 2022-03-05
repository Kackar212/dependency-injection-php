<?php

namespace Qob\DependencyInjectionPhp\Error;

class NotInstantiableError extends \Error
{
  function __construct($notInstantiable)
  {
    parent::__construct(
      "{$notInstantiable} is not instantiable!"
    );
  }
}
