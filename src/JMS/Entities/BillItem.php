<?php

namespace IntegrationCommon\JMS\Entities;

use DateTime;
use JMS\Serializer\Annotation\Type;

class BillItem extends Entity
{
    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("float")
     */
    public $amount = 0;

    /**
     * @Type("DateTime")
     */
    public $datetime;

    /**
     * @Type("boolean")
     */
    public $hidden = false;

    /**
     * BillItem constructor.
     * @param $description
     * @param int $amount
     * @param $datetime
     * @param bool $hidden
     */
    public function __construct($description, $amount, $datetime, $hidden)
    {
        $this->description = $description;
        $this->amount = $amount;
        $this->datetime = $datetime;
        $this->hidden = $hidden;
    }


}
