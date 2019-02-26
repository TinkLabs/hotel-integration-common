<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class ShopMenu extends Entity
{

    /**
     * @Type("array<IntegrationCommon\JMS\Entities\ShopCategory>")
     */
    public $categories;

    /**
     * @Type("array<IntegrationCommon\JMS\Entities\ShopItem>")
     */
    public $items;

    /**
     * ShopMenu constructor.
     * @param $categories
     * @param $items
     */
    public function __construct($categories, $items)
    {
        $this->categories = $categories;
        $this->items = $items;
    }
}
