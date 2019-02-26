<?php

namespace IntegrationCommon;

use Exception;
use IntegrationCommon\JMS\Serializer as JMSSerializer;

class Serializer
{
    static public function serialize(array $array)
    {
        try {
            array_walk_recursive($array, function (&$value) {
                $value = JMSSerializer::serialize($value);
            });

            $string = serialize($array);
        } catch (Exception $error) {
            return '';
        }

        return $string;
    }

    static public function deserialize($string)
    {
        try {
            $array = unserialize($string);

            array_walk_recursive($array, function (&$value) {
                $value = JMSSerializer::deserialize($value);
            });
        } catch (Exception $error) {
            return array();
        }

        return $array;
    }
}