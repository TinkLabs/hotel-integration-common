<?php

namespace IntegrationCommon\JMS\Entities;

use JMS\Serializer\Annotation\Type;

class Messages extends Entity
{
    /**
     * @Type("array<IntegrationCommon\JMS\Entities\Message>")
     */
    public $messages = [];

    /**
     * Messages constructor.
     * @param array $messages
     */
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }
}
