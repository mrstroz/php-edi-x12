<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class RefSegment
 * @package Mrstroz\Edi\Segments
 */
class RefSegment implements SegmentInterface
{

    /**
     * Reference Identification - To specify identifying information
     */
    const REF_00 = 'edi_qualifier';

    /**
     * Reference Identification Qualifier - Code qualifying the Reference Identification
     */
    const REF_01 = 'reference_qualifier';

    /**
     * Reference Identification - Reference information as defined for a particular Transaction Set or as
     * specified by the Reference Identification Qualifier
     */
    const REF_02 = 'reference_value';


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
                $item = [self::REF_00 => $item];
                break;
            case 1:
                $item = [self::REF_01 => $item];
                break;
            case 2:
                $item = [self::REF_02 => $item];
                break;
            default:
                break;
        }
    }
}