<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class Tc2Segment
 * @package Mrstroz\Edi\Segments
 */
class Tc2Segment implements SegmentInterface
{

    /**
     * Carrier Details (Quantity and Weight)
     */
    const TC2_00 = 'edi_qualifier';

    /**
     * Code identifying the commodity coding system used for Commodity Code
     */
    const TC2_01 = 'commodity_code_qualifier';

    /**
     *  Code describing a commodity or group of commodities
     */
    const TC2_02 = 'commodity_code';


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
                $item = [self::TC2_00 => $item];
                break;
            case 1:
                $item = [self::TC2_01 => $item];
                break;
            case 2:
                $item = [self::TC2_02 => $item];
                break;
            default:
                break;
        }
    }
}