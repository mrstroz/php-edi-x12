<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class Td4Segment
 * @package Mrstroz\Edi\Segments
 */
class Td4Segment implements SegmentInterface
{

    /**
     * Carrier Details (Routing Sequence/Transit Time)
     */
    const TD4_00 = 'edi_qualifier';

    /**
     *   Code specifying the method or type of transportation for the shipment
     */
    const TD4_01 = 'special_handling_code';

    /**
     *  A free-form description to clarify the related data elements and their content
     */
    const TD4_04 = 'description';


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
                $item = [self::TD4_00 => $item];
                break;
            case 1:
                $item = [self::TD4_01 => $item];
                break;
            case 4:
                $item = [self::TD4_04 => $item];
                break;
            default:
                break;
        }
    }
}