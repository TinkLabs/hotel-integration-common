<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class LightStatus extends Entity
{
    const STATUS_OFF = 0;
    const STATUS_ON = 1;
    const BRIGHTNESS_LEVEL_2 = 2;
    const BRIGHTNESS_LEVEL_3 = 3;
    const BRIGHTNESS_LEVEL_4 = 4;
    const BRIGHTNESS_LEVEL_5 = 5;

    /**
     * @Type("int")
     */
    public $status;

    /**
     * LightingStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
