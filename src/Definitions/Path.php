<?php

namespace Gipfel\DocumentationGenerator\Definitions\Parameter;

use Gipfel\DocumentationGenerator\Operations\Operation;

class Path
{
    public static function define(
        string $name,
        string $summary = null,
        string $description = null,
        Operation $get = null,
        Operation $post = null,
        Operation $patch = null,
        Operation $put = null,
        Operation $delete = null,
        Operation $options = null,
        Operation $head = null,
        Operation $trace = null
    ): Path {
        return new self($name, $summary, $description, $get, $post, $patch, $put, $delete, $options, $head, $trace);
    }

    public function __construct(
        protected string $name,
        protected ?string $summary,
        protected ?string $description,
        protected ?Operation $get,
        protected ?Operation $post,
        protected ?Operation $patch,
        protected ?Operation $put,
        protected ?Operation $delete,
        protected ?Operation $options,
        protected ?Operation $head,
        protected ?Operation $trace,
    ) {
    }
}
