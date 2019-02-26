<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class BlindStatus extends Entity
{
    const STATUS_CLOSE = 0;
    const STATUS_OPEN = 1;
    const STATUS_STOP = -1;

    /**
     * @Type("int")
     */
    public $status;

    /**
     * BlindStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
