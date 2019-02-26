<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class ShopCategory extends Entity
{
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $parent_id;

    /**
     * @Type("string")
     */
    public $name;

    /**
     * ShopCategory constructor.
     * @param $id
     * @param $parent_id
     * @param $name
     */
    public function __construct($id, $parent_id, $name)
    {
        $this->id = $id;
        $this->parent_id = $parent_id;
        $this->name = $name;
    }
}
