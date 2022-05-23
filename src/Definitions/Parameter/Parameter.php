<?php

namespace Gipfel\DocumentationGenerator\Definitions\Parameter;

class Parameter
{
    public static function define(
        string $name,
        string $description = null,
        bool $required = false,
        bool $deprecated = false,
        bool $allowEmptyValues = false,
    ): Parameter {
        return new Parameter($name, $description, $required, $deprecated, $allowEmptyValues);
    }

    public function __construct(
        protected string $name,
        protected ?string $in = null,
        protected ?string $description = null,
        protected bool $required = false,
        protected bool $deprecated = false,
        protected bool $allowEmptyValues = false
    )
    {
    }
}
