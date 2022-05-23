<?php

namespace Gipfel\DocumentationGenerator\Definitions\Parameter;

class QueryParameter extends Parameter
{
    public function __construct(
        string $name,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
        bool $allowEmptyValues = false
    ) {
        parent::__construct($name, 'query', $description, $required, $deprecated, $allowEmptyValues);
    }
}
