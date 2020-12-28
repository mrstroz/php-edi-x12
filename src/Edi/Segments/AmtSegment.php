<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class AmtSegment
 * @package Mrstroz\Edi\Segments
 */
class AmtSegment implements SegmentInterface
{


    /**
     * To specify basic and most frequently used line item data
     */
    const AMT_00 = 'edi_qualifier';

    /**
     * Code to qualify amount
     */
    const AMT_01 = 'amount_qualifier';

    /**
     * Monetary Amount
     */
    const AMT_02 = 'amount';


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
                $item = [self::AMT_00 => $item];
                break;
            case 1:
                $item = [self::AMT_01 => $item];
                break;
            case 2:
                $item = [self::AMT_02 => $item];
                break;
            default:
                break;
        }
    }
}