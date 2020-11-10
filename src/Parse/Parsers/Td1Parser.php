<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class Td1Parser
 * @package Mrstroz\Parse\Parsers
 */
class Td1Parser implements SegmentParserInterface
{

    /**
     * Carrier Details (Quantity and Weight)
     */
    const TD1_00 = 'edi_qualifier';

    /**
     * Packaging Code Description: Code identifying the type of packaging; Part 1: Packaging Form, Part 2:
     * Packaging Material; if the Data Element is used, then Part 1 is always required
     */
    const TD1_01 = 'packaging_code';

    /**
     *  Number of units (pieces) of the lading commodity
     */
    const TD1_02 = 'landing_quantity';

    /**
     *  Description of an item as required for rating and billing purposes
     */
    const TD1_05 = 'landing_description';

    /**
     *  Code defining the type of weight
     */
    const TD1_06 = 'weight_qualifier';

    /**
     *  Numeric value of weight
     */
    const TD1_07 = 'weight';

    /**
     *  Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
     */
    const TD1_08 = 'uom_code';


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
                $item = [self::TD1_00 => $item];
                break;
            case 1:
                $item = [self::TD1_01 => $item];
                break;
            case 2:
                $item = [self::TD1_02 => $item];
                break;
            case 5:
                $item = [self::TD1_05 => $item];
                break;
            case 6:
                $item = [self::TD1_06 => $item];
                break;
            case 7:
                $item = [self::TD1_07 => $item];
                break;
            case 8:
                $item = [self::TD1_08 => $item];
                break;
            default:
                break;
        }
    }
}