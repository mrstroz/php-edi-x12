<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Class IeaParser
 * @package Mrstroz\Parse\Parsers
 */
class IeaParser implements SegmentParserInterface
{

    /**
     * To define the end of an interchange of zero or more functional groups and interchange-related control segments
     */
    const IEA_00 = 'edi_qualifier';

    /**
     * Number of Included Functional Groups - A count of the number of functional groups included in an interchange
     */
    const IEA_01 = 'number_of_functional_groups';

    /**
     * Interchange Control Number - A control number assigned by the interchange sender
     */
    const IEA_02 = 'iea_interchange_control_number';

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
                $item = [self::IEA_00 => $item];
                break;
            case 1:
                $item = [self::IEA_01 => $item];
                break;
            case 2:
                $item = [self::IEA_02 => $item];
                break;
            default:
                break;
        }
    }
}
