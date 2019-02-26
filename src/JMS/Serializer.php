<?php

namespace IntegrationCommon\JMS;

use JMS\Serializer\SerializerBuilder;

class Serializer
{
    static public function serialize($value)
    {
        if ($value instanceof JMS) {
            $class = get_class($value);
            $payload = SerializerBuilder::create()->build()->serialize($value, 'json');
            $value = "JMS|{$class}|{$payload}";
        }

        return $value;
    }

    static public function deserialize($value)
    {
        if (is_string($value)) {
            $jms = explode('|', $value, 3);
            if (count($jms) >= 3) {
                if ($jms[0] === 'JMS') {
                    $value = SerializerBuilder::create()->build()->deserialize($jms[2], $jms[1], 'json');
                }
            }
        }

        return $value;
    }
}