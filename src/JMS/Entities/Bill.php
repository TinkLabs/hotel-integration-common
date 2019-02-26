<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class Bill extends Entity
{
    /**
     * @Type("float")
     */
    public $amount = 0;

    /**
     * @Type("array<IntegrationCommon\JMS\Entities\BillItem>")
     */
    public $items = [];

    /**
     * @Type("DateTime")
     */
    public $datetime;

    /**
     * Bill constructor.
     * @param int $amount
     * @param array $items
     * @param $datetime
     */
    public function __construct($amount, array $items, $datetime)
    {
        $this->amount = $amount;
        $this->items = $items;
        $this->datetime = $datetime;
    }

}
