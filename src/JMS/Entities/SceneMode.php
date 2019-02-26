<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class SceneMode extends Entity
{

    /**
     * @Type("int")
     */
    public $mode;

    /**
     * LightingStatus constructor.
     * @param $status
     */
    public function __construct($mode)
    {
        $this->mode = $mode;
    }
}
