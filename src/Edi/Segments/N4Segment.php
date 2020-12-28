<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class N4Segment
 * @package Mrstroz\Edi\Segments
 */
class N4Segment implements SegmentInterface
{

    /**
     * Address Information
     */
    const N4_00 = 'edi_qualifier';

    /**
     *  Free-form text for city name
     */
    const N4_01 = 'city';

    /**
     *  Code (Standard State/Province) as defined by appropriate government agency
     */
    const N4_02 = 'province';

    /**
     *  Code defining international postal zone code excluding punctuation and blanks (zip code for United States)
     */
    const N4_03 = 'postal_code';

    /**
     *  Code identifying the country
     */
    const N4_04 = 'country_code';

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
                $item = [self::N4_00 => $item];
                break;
            case 1:
                $item = [self::N4_01 => $item];
                break;
            case 2:
                $item = [self::N4_02 => $item];
                break;
            case 3:
                $item = [self::N4_03 => $item];
                break;
            case 4:
                $item = [self::N4_04 => $item];
                break;
            default:
                break;
        }
    }
}