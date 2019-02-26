<?php

namespace IntegrationCommon\Requests;

use \DateTime;
use JMS\Serializer\Annotation\Type;

class Bill extends Request
{
    /**
     * @Type("IntegrationCommon\JMS\Entities\Guest")
     */
    public $guest;

    /**
     * @Type("DateTime")
     */
    public $datetime;

    /**
     * Bill constructor.
     * @param $guest
     * @param $datetime
     */
    public function __construct($guest, $datetime)
    {
        $this->guest = $guest;
        $this->datetime = $datetime;
    }

}
