<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class FanModeStatus extends Entity
{
    const STATUS_OFF = 0;
    const STATUS_LOW = 1;
    const STATUS_MEDIUM = 2;
    const STATUS_HIGH = 3;
    const STATUS_AUTO = 4;

    /**
     * @Type("int")
     */
    public $status;

    /**
     * FanModeStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
