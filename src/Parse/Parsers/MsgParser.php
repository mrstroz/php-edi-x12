<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class MsgParser
 * @package Mrstroz\Parse\Parsers
 */
class MsgParser implements SegmentParserInterface
{

    /**
     * Message Text
     */
    const MSG_00 = 'edi_qualifier';

    /**
     *  Free-form message text
     */
    const MSG_01 = 'text';


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
                $item = [self::MSG_00 => $item];
                break;
            case 1:
                $item = [self::MSG_01 => $item];
                break;
            default:
                break;
        }
    }
}