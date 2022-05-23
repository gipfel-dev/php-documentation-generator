<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class DeleteOperation implements OperationContract
{
    public static function define(bool $deprecated = false, array $parameters = []): Operation
    {
        return new Operation('DELETE', $deprecated, $parameters);
    }
}
