<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class Td5Segment
 * @package Mrstroz\Edi\Segments
 */
class Td5Segment implements SegmentInterface
{

    /**
     * Carrier Details (Routing Sequence/Transit Time)
     */
    const TD5_00 = 'edi_qualifier';

    /**
     *   Code specifying the method or type of transportation for the shipment
     */
    const TD5_04 = 'transportation_code';

    /**
     *  Free-form description of the routing or requested routing for shipment, or the originating carrier's identity
     */
    const TD5_05 = 'routing';


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
                $item = [self::TD5_00 => $item];
                break;
            case 4:
                $item = [self::TD5_04 => $item];
                break;
            case 5:
                $item = [self::TD5_05 => $item];
                break;
            default:
                break;
        }
    }
}