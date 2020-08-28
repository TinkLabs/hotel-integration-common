<?php

namespace IntegrationCommon\JMS\Entities;

use DateTime;
use JMS\Serializer\Annotation\Type;

class Guest extends Entity
{
    /**
     * @Type("string")
     */
    public $room_number;

    /**
     * @Type("string")
     */
    public $guest_id;

    /**
     * @Type("string")
     */
    public $member_id;

    /**
     * @Type("string")
     */
    public $group_code;

    /**
     * @Type("string")
     */
    public $vip_code;

    /**
     * @Type("string")
     */
    public $first_name;

    /**
     * @Type("string")
     */
    public $last_name;

    /**
     * @Type("string")
     */
    public $salutation;

    /**
     * @Type("string")
     */
    public $language;

    /**
     * @Type("DateTime")
     */
    public $arrival_at;

    /**
     * @Type("DateTime")
     */
    public $departure_at;

    /**
     * @Type("array")
     */
    public $data = [];

    /**
     * Guest constructor.
     * @param $room_number
     * @param $guest_id
     * @param $member_id
     * @param $group_code
     * @param $vip_code
     * @param $first_name
     * @param $last_name
     * @param $salutation
     * @param $language
     * @param $arrival_at
     * @param $departure_at
     * @param $data
     */
    public function __construct(
        $room_number,
        $guest_id,
        $member_id = null,
        $group_code = null,
        $vip_code = null,
        $first_name = null,
        $last_name = null,
        $salutation = null,
        $language = null,
        $arrival_at = null,
        $departure_at = null,
        $data = []
    )
    {
        $this->room_number = $room_number;
        $this->guest_id = $guest_id;
        $this->member_id = $member_id;
        $this->group_code = $group_code;
        $this->vip_code = $vip_code;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salutation = $salutation;
        $this->language = $language;
        $this->arrival_at = $arrival_at;
        $this->departure_at = $departure_at;
        $this->data = $data;
    }
}
