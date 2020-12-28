<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class SeSegment
 * @package Mrstroz\Edi\Segments
 */
class SeSegment implements SegmentInterface
{

    /**
     * To indicate the end of the transaction set and provide the count of the transmitted segments (including the beginning (ST) and ending (SE) segments)
     */
    const SE_00 = 'edi_qualifier';

    /**
     * Number of Included Segments - Total number of segments included in a transaction set including ST and SE segments
     */
    const SE_01 = 'number_of_segments';

    /**
     * Transaction Set Control Number - Identifying control number that must be unique within the transaction set functional group assigned by the originator for a transaction set
     */
    const SE_02 = 'transaction_control_number';

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
                $item = [self::SE_00 => $item];
                break;
            case 1:
                $item = [self::SE_01 => $item];
                break;
            case 2:
                $item = [self::SE_02 => $item];
                break;
            default:
                break;
        }
    }
}