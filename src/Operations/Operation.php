<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class Operation
{
    public static function define(
        ?string $tags = null,
        ?string $summary = null,
        ?string $description = null,
        array $parameters = [],
        array $responses = [],
        bool $deprecated = false,
        array $servers = []
    ): Operation {
        return new Operation(
            tags: $tags,
            summary: $summary,
            description: $description,
            parameters: $parameters,
            responses: $responses,
            deprecated: $deprecated,
            servers: $servers
        );
    }

    public function __construct(
        ?string $tags = null,
        ?string $summary = null,
        ?string $description = null,
        array $parameters = [],
        array $responses = [],
        bool $deprecated = false,
        array $servers = [],
    ) {
    }
}
