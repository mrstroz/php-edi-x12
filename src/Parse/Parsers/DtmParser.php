<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class DtmParser
 * @package Mrstroz\Parse\Parsers
 */
class DtmParser implements SegmentParserInterface
{

    /**
     * To specify pertinent dates and times
     */
    const DTM_00 = 'edi_qualifier';

    /**
     * Date/Time Qualifier
     */
    const DTM_01 = 'date_qualifier';

    /**
     * Date - CCYYMMDD
     */
    const DTM_02 = 'date';


    /**
     * Code table with DTM_01 specifications
     */
    const CODE_TABLE_01 = [63 => 'do_not_deliver_after', 64 => 'do_not_deliver_before'];


    /**
     * @param $segment
     * @return array
     */
    public static function parse($segment)
    {
        $content = array();
        array_walk_recursive($segment, 'self::setContentType');
        foreach ($segment as $key => $item) {
            if (!empty($item[key($item)])) {
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
                $item = [self::DTM_00 => $item];
                break;
            case 1:
                $item = [self::DTM_01 => $item];
                break;
            case 2:
                $item = [self::DTM_02 => $item];
                break;
            default:
                break;
        }
    }
}