<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class PerSegment
 * @package Mrstroz\Edi\Segments
 */
class PerSegment implements SegmentInterface
{

    /**
     * Administrative Communications Contact
     */
    const PER_00 = 'edi_qualifier';

    /**
     * Contact Function Code
     */
    const PER_01 = 'contact_qualifier';

    /**
     * Name
     */
    const PER_02 = 'contact_name';

    /**
     * Communication Number Qualifier
     */
    const PER_03 = 'contact_communication_qualifier_1';

    /**
     * Communication Number
     */
    const PER_04 = 'contact_number_1';

    /**
     * Communication Number Qualifier
     */
    const PER_05 = 'contact_communication_qualifier_2';

    /**
     * Communication Number
     */
    const PER_06 = 'contact_number_2';


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
                $item = [self::PER_00 => $item];
                break;
            case 1:
                $item = [self::PER_01 => $item];
                break;
            case 2:
                $item = [self::PER_02 => $item];
                break;
            case 3:
                $item = [self::PER_03 => $item];
                break;
            case 4:
                $item = [self::PER_04 => $item];
                break;
            case 5:
                $item = [self::PER_05 => $item];
                break;
            case 6:
                $item = [self::PER_06 => $item];
                break;
            default:
                break;
        }
    }
}