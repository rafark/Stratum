<?php

namespace Stratum\Original\HTTP\Registrator;

use Stratum\Original\HTTP\Registrator\RoutesRegistratorFacade;
use Stratum\Original\HTTP\Registrator\RoutesRegistrator;

Class POST extends HTTPRoutesRegistratorFacade
{
    protected function setMethod()
    {
        $this->routesRegistrator->setMethod('POST');
    }

}