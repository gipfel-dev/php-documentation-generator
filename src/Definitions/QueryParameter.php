<?php

namespace Gipfel\DocumentationGenerator\Definitions;

use Attribute;

#[Attribute]
class QueryParameter extends Parameter
{
    protected string $in = 'query';
}
