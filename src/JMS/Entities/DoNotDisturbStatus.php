<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class DoNotDisturbStatus extends Entity
{
    const STATUS_OFF = 0;
    const STATUS_ON = 1;

    /**
     * @Type("int")
     */
    public $status;

    /**
     * DoNotDisturbStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
