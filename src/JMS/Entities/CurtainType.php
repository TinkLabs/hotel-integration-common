<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class CurtainType extends Entity
{
    const OUTER_CURTAIN = 1;
    const INNER_CURTAIN = 2;
    const SHADE_CURTAIN = 3;
    const BLIND_CURTAIN = 4;
    const DRAPE_CURTAIN = 5;

    /**
     * @Type("int")
     */
    public $type;

    /**
     * CurtainStatus constructor.
     * @param $status
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
}
