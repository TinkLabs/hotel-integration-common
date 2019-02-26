<?php

namespace IntegrationCommon\JMS\Requests;

use \DateTime;
use JMS\Serializer\Annotation\Type;

class Charge extends Request
{
    /**
     * @Type("IntegrationCommon\JMS\Entities\Guest")
     */
    public $guest;

    /**
     * @Type("float")
     */
    public $amount;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("DateTime")
     */
    public $datetime;

    /**
     * @Type("string")
     */
    public $reference_id;

    /**
     * Charge constructor.
     * @param $guest
     * @param $amount
     * @param $description
     * @param $datetime
     * @param $reference_id
     */
    public function __construct($guest, $amount, $description, $datetime, $reference_id)
    {
        $this->guest = $guest;
        $this->amount = $amount;
        $this->description = $description;
        $this->datetime = $datetime;
        $this->reference_id = $reference_id;
    }

}
