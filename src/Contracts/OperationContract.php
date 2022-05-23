<?php

namespace Gipfel\DocumentationGenerator\Contracts;

interface OperationContract
{
    public static function define(
        bool $deprecated = false,
        array $parameters = [],
    );
}
