<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class PatchOperation implements OperationContract
{
    public static function define(bool $deprecated = false, array $parameters = []): Operation
    {
        return new Operation('PATCH', $deprecated, $parameters);
    }
}
