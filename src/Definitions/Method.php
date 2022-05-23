<?php

namespace Gipfel\DocumentationGenerator\Definitions;

use Attribute;

#[Attribute]
class Method
{
    public const GET = 'GET';
    public const POST = 'POST';
    public const PATCH = 'PATCH';
    public const PUT = 'PUT';
    public const DELETE = 'DELETE';
}
