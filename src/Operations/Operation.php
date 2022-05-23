<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class Operation
{
    public function __construct(
        protected string $method,
        protected bool $deprecated = false,
        protected array $parameters = []
    )
    {
    }
}
