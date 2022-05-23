<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class GetOperation implements OperationContract
{
    public static function define(bool $deprecated = false, array $parameters = []): Operation
    {
        return new Operation('GET', $deprecated, $parameters);
    }
}
