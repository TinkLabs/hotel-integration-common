<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class DiningMenu extends Entity
{
    /**
     * @Type("array<IntegrationCommon\JMS\Entities\DiningCategory>")
     */
    public $categories;

    /**
     * @Type("array<IntegrationCommon\JMS\Entities\DiningItem>")
     */
    public $items;

    /**
     * DiningMenu constructor.
     * @param $categories
     * @param $items
     */
    public function __construct($categories, $items)
    {
        $this->categories = $categories;
        $this->items = $items;
    }
}
