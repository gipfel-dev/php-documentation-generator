<?php

namespace Gipfel\DocumentationGenerator\Contracts;

interface OperationContract
{
    public static function define(
        ?string $tags = null,
        ?string $summary = null,
        ?string $description = null,
        array $parameters = [],
        array $responses = [],
        bool $deprecated = false,
    );
}
