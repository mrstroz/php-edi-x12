<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class SacParser
 * @package Mrstroz\Parse\Parsers
 */
class SacParser implements SegmentParserInterface
{

    /**
     * Service, Promotion, Allowance, or Charge Information
     */
    const SAC_00 = 'edi_qualifier';

    /**
     * Allowance or Charge Indicator
     */
    const SAC_01 = 'indicator';

    /**
     * Service, Promotion, Allowance, or Charge Code
     */
    const SAC_02 = 'code';

    /**
     * Description
     */
    const SAC_15 = 'description';


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
                $item = [self::SAC_00 => $item];
                break;
            case 1:
                $item = [self::SAC_01 => $item];
                break;
            case 2:
                $item = [self::SAC_02 => $item];
                break;
            case 15:
                $item = [self::SAC_15 => $item];
                break;
            default:
//                $item = [$key => $item];
                break;
        }
    }
}