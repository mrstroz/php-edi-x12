<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class N2Parser
 * @package Mrstroz\Parse\Parsers
 */
class N2Parser implements SegmentParserInterface
{

    /**
     * Additional Name Information
     */
    const N2_00 = 'edi_qualifier';

    /**
     * Free-form name
     */
    const N2_01 = 'name';


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
                $item = [self::N2_00 => $item];
                break;
            case 1:
                $item = [self::N2_01 => $item];
                break;
            default:
                break;
        }
    }
}