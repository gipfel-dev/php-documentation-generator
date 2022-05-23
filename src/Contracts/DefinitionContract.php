<?php

namespace Gipfel\DocumentationGenerator\Contracts;

interface DefinitionContract
{
    public static function define(
        string $name,
        string $description = null,
        bool $required = false,
        bool $deprecated = false,
        bool $allowEmptyValues = false,
    );
}
