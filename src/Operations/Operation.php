<?php

namespace Gipfel\DocumentationGenerator\Operations;

use Gipfel\DocumentationGenerator\Contracts\OperationContract;

class Operation implements OperationContract
{
    public static function define(
        ?string $tags = null,
        ?string $summary = null,
        ?string $description = null,
        array $parameters = [],
        array $responses = [],
        bool $deprecated = false,
    ): Operation {
        return new self($tags, $summary, $description, $parameters, $responses, $deprecated);
    }

    public function __construct(
        protected ?string $tags = null,
        protected ?string $summary = null,
        protected ?string $description = null,
        protected ?array $parameters = [],
        protected ?array $responses = [],
        protected bool $deprecated = false,
    ) {
    }
}
