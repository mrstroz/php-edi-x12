<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class FobSegment
 * @package Mrstroz\Edi\Segments
 */
class FobSegment implements SegmentInterface
{

    /**
     * F.O.B. Related Instructions
     */
    const FOB_00 = 'edi_qualifier';

    /**
     * Code identifying payment terms for transportation charges
     */
    const FOB_01 = 'shipment_method_of_payment';

    /**
     *  Code identifying type of location
     */
    const FOB_02 = 'location_qualifier';

    /**
     * Description
     */
    const FOB_03 = 'description';

    /**
     * Code identifying the source of the transportation terms
     */
    const FOB_04 = 'transportation_terms_qualifier';

    /**
     * Code identifying the trade terms which apply to the shipment transportation responsibility
     */
    const FOB_05 = 'transportation_terms_code';


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
                $item = [self::FOB_00 => $item];
                break;
            case 1:
                $item = [self::FOB_01 => $item];
                break;
            case 2:
                $item = [self::FOB_02 => $item];
                break;
            case 3:
                $item = [self::FOB_03 => $item];
                break;
            case 4:
                $item = [self::FOB_04 => $item];
                break;
            case 5:
                $item = [self::FOB_05 => $item];
                break;
            default:
                break;
        }
    }
}