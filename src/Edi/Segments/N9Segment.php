<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class N9Segment
 * @package Mrstroz\Edi\Segments
 */
class N9Segment implements SegmentInterface
{

    /**
     * Reference Identification
     */
    const N9_00 = 'edi_qualifier';

    /**
     * Code qualifying the Reference Identification
     */
    const N9_01 = 'reference_identification_qualifier';

    /**
     * Reference information as defined for a particular Transaction Set or as specified by the Reference Identification Qualifier
     */
    const N9_02 = 'reference_identification';

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
                $item = [self::N9_00 => $item];
                break;
            case 1:
                $item = [self::N9_01 => $item];
                break;
            case 2:
                $item = [self::N9_02 => $item];
                break;
            default:
                break;
        }
    }
}