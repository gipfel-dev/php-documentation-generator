<?php

namespace Gipfel\DocumentationGenerator\Definitions\Parameter;

use Gipfel\DocumentationGenerator\Contracts\ParameterContract;

class QueryParameter extends Parameter implements ParameterContract
{
    public function __construct(
        string $name,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
        bool $allowEmptyValues = false
    ) {
        return parent::__construct($name, 'query', $description, $required, $deprecated, $allowEmptyValues);
    }
}
