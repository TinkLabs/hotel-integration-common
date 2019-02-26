<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class HousekeepingStatus extends Entity
{
    /**
     * @Type("string")
     */
    public $status;

    /**
     * HousekeepingStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
