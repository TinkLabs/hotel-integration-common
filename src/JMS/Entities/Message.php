<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class Message extends Entity
{
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $content;

    /**
     * @Type("DateTime")
     */
    public $datetime;

    /**
     * Mesaage constructor.
     * @param $id
     * @param $content
     * @param $datetime
     */
    public function __construct($id, $content, $datetime)
    {
        $this->id = $id;
        $this->content = $content;
        $this->datetime = $datetime;
    }
}
