<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class PidSegment
 * @package Mrstroz\Edi\Segments
 */
class PidSegment implements SegmentInterface
{

    /**
     * Product/Item Description
     */
    const PID_00 = 'edi_qualifier';

    /**
     * Code indicating the format of a description
     */
    const PID_01 = 'item_description_type';

    /**
     * Code identifying the general class of a product or process characteristic
     */
    const PID_02 = 'product_characteristic_code';

    /**
     *  Description
     */
    const PID_05 = 'description';


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
                $item = [self::PID_00 => $item];
                break;
            case 1:
                $item = [self::PID_01 => $item];
                break;
            case 2:
                $item = [self::PID_02 => $item];
                break;
            case 5:
                $item = [self::PID_05 => $item];
                break;
            default:
                break;
        }
    }
}