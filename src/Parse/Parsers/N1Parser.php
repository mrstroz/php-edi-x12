<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class N1Parser
 * @package Mrstroz\Parse\Parsers
 */
class N1Parser implements SegmentParserInterface
{

    /**
     * Name
     */
    const N1_00 = 'edi_qualifier';

    /**
     * Entity Identifier Code - Code identifying an organizational entity, a physical location, property or an individual / ST Ship To
     */
    const N1_01 = 'entity_identifier_code';

    /**
     * Free-form name
     */
    const N1_02 = 'name';

    /**
     * Identification Code Qualifier - Code designating the system/method of code structure used for Identification Code (67)
     */
    const N1_03 = 'identification_code_qualifier';

    /**
     * Identification Code -  Code identifying a party or other code
     */
    const N1_04 = 'identification_code';

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
                $item = [self::N1_00 => $item];
                break;
            case 1:
                $item = [self::N1_01 => $item];
                break;
            case 2:
                $item = [self::N1_02 => $item];
                break;
            case 3:
                $item = [self::N1_03 => $item];
                break;
            case 4:
                $item = [self::N1_04 => $item];
                break;
            default:
                break;
        }
    }
}