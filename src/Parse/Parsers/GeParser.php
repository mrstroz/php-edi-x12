<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class GeParser
 * @package Mrstroz\Parse\Parsers
 */
class GeParser implements SegmentParserInterface
{
    /**
     * To indicate the end of a functional group and to provide control information
     */
    const GE_00 = 'end_group';

    /**
     * Number of Transaction Sets Included - Total number of transaction sets included in the functional group or interchange (transmission) group terminated by the trailer containing this data element
     */
    const GE_01 = 'number_of_transactions';

    /**
     * Group Control Number -  Assigned number originated and maintained by the sender
     */
    const GE_02 = 'ge_group_control_number';

    /**
     * @param $segment
     * @return array
     */
    public static function parse($segment)
    {
        $content = array();
        array_walk_recursive($segment, 'self::setContentType');
        foreach ($segment as $key => $item) {
            if ($item) {
                $content[key($item)] = $item[key($item)];
            }
        }

        return $content;
    }

    /**
     * Set the the key to a meaningfull value.
     * @param $item
     * @param $key
     */
    private static function setContentType(&$item, $key)
    {
        switch ($key) {
            case 0:
                $item = [self::GE_00 => $item];
                break;
            case 1:
                $item = [self::GE_01 => $item];
                break;
            case 2:
                $item = [self::GE_02 => $item];
                break;
            default:
                break;
        }
    }
}
