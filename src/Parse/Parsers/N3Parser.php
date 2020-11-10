<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class N3Parser
 * @package Mrstroz\Parse\Parsers
 */
class N3Parser implements SegmentParserInterface
{

    /**
     * Address Information
     */
    const N3_00 = 'edi_qualifier';

    /**
     *  Address information
     */
    const N3_01 = 'address_information_1';

    /**
     *  Address information
     */
    const N3_02 = 'address_information_2';

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
                $item = [self::N3_00 => $item];
                break;
            case 1:
                $item = [self::N3_01 => $item];
                break;
            case 2:
                $item = [self::N3_02 => $item];
                break;
            default:
                break;
        }
    }
}