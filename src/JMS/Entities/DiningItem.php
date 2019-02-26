<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class DiningItem extends Entity
{
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("float")
     */
    public $amount;

    /**
     * @Type("boolean")
     */
    public $disabled = false;

    /**
     * DiningItem constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $amount
     * @param bool $disabled
     */
    public function __construct($id, $name, $description, $amount, $disabled)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->amount = $amount;
        $this->disabled = $disabled;
    }
}
