<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingDescriptionItem
{
    use Serializable;

    protected string $item;

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }
}
