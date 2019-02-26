<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class LightType extends Entity
{
    const BEDSIDE_LEFT = 1;
    const BEDSIDE_RIGHT = 2;
    const FLOOR_LAMP = 3;
    const DAY_BED_DOWN_LIGHT = 4;
    const BATHROOM_CEILING = 5;
    const BATHROOM_MIRROR = 6;
    const NIGHT_LAMP = 7;
    const TABLE_LAMP = 8;
    const DESK_LAMP = 9;
    const VANITY_LAMP = 10;

    /**
     * @Type("int")
     */
    public $type;

    /**
     * LightingStatus constructor.
     * @param $status
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
}
