<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class KeyCard extends Entity
{
    /**
     * @Type("string")
     */
    public $payload;

    /**
     * KeyCard constructor.
     * @param $payload
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }
}
