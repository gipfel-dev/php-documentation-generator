<?php

#[Attribute]
class QueryParameter extends Parameter
{
    protected string $in = 'query';
}
