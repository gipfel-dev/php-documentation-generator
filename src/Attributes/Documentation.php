<?php

namespace Gipfel\DocumentationGenerator\Attributes;

use Attribute;
use Gipfel\DocumentationGenerator\Contracts\DocumentationContract;

#[Attribute]
class Documentation
{
    public function __construct(DocumentationContract $documentation)
    {
    }
}
