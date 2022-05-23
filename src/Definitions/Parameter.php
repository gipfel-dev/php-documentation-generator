<?php

namespace Gipfel\DocumentationGenerator\Definitions;

use Attribute;

#[Attribute]
class Parameter
{
    protected string $in = 'body';

    public function __construct(
        protected string $name,
        protected string $description = 'null',
        protected bool $required = false,
        protected bool $deprecated = false,
        protected bool $allowEmptyValues = false
    )
    {
    }
}
