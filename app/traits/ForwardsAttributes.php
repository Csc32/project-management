<?php

namespace App\traits;

trait ForwardsAttributes
{
    public $customAttributes;

    public function mount(...$attrs)
    {
        $this->mapAttributes(...$attrs);
    }

    public function mapAttributes(...$attrs)
    {
        $attributes = '';
        collect(...$attrs)->each(function ($value, $attr) use (&$attributes) {
            $attributes .= " {$attr}=\"{$value}\"";
        });
        $this->customAttributes = $attributes;
    }
}
