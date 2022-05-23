<?php

#[Attribute]
class QueryParameter extends Parameter
{
    protected string $in = 'query';

    public function __construct(
        protected string $name,
        protected string $description = 'null',
        protected bool $required = false,
        protected bool $deprecated = false,
        protected bool $allowEmptyValues = false
    )
    {
        parent::__construct($name, $this->description, $this->required, $this->deprecated, $this->allowEmptyValues);
    }
}
