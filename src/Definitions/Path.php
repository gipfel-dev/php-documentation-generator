<?php

namespace Gipfel\DocumentationGenerator\Definitions\Parameter;

use Gipfel\DocumentationGenerator\Operations\Operation;

class Path
{
    public static function define(
        string $name,
        Operation $get = null,
        Operation $post = null,
        Operation $patch = null,
        Operation $put = null,
        Operation $delete = null,
    ): Path {
        return new Path(name: $name, get: $get, post: $post, patch: $patch, put: $put, delete: $delete);
    }

    public function __construct(
        protected string $name,
        protected Operation $get,
        protected Operation $post,
        protected Operation $patch,
        protected Operation $put,
        protected Operation $delete,
    ) {
    }
}
