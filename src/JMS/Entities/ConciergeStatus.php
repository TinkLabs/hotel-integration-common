<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class ConciergeStatus extends Entity
{
    /**
     * @Type("string")
     */
    public $status;

    /**
     * ConciergeStatus constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }
}
