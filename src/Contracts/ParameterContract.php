<?php

namespace Gipfel\DocumentationGenerator\Contracts;

interface ParameterContract
{
    public static function define(
        string $name,
        string $description = null,
        bool $required = false,
        bool $deprecated = false,
        bool $allowEmptyValues = false,
    );
}
