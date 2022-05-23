<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class PostOperation implements OperationContract
{
    public static function define(bool $deprecated = false, array $parameters = []): Operation
    {
        return new Operation('POST', $deprecated, $parameters);
    }
}
