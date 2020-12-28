<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class IsaSegment
 * @package Mrstroz\Edi\Segments
 */
class IsaSegment implements SegmentInterface
{

    /**
     * ISA represents interchange control header.
     */
    const ISA_00 = 'edi_qualifier';

    /**
     * Code 00 indicates that no authorization information present in I02.
     */
    const ISA_01 = 'authorization_information_qualifier';

    /**
     *
     */
    const ISA_02 = 'authorization_information';

    /**
     * Code 00 indicates that no security information present in I01.
     */
    const ISA_03 = 'security_information_qualifier';

    /**
     *
     */
    const ISA_04 = 'segurity_information';

    /**
     *
     */
    const ISA_05 = 'interchange_id_qualifier';

    /**
     *
     */
    const ISA_06 = 'interchange_sender_id';

    /**
     *
     */
    const ISA_07 = 'interchange_id_qualifier';

    /**
     *
     */
    const ISA_08 = 'interchange_receiver_id';

    /**
     *
     */
    const ISA_09 = 'interchange_date';

    /**
     *
     */
    const ISA_10 = 'interchange_time';

    /**
     * ‘U’ indicates that U.S. EDI Community of ASC X12, TDCC, and UCS is responsible for the control standard used by the message.
     */
    const ISA_11 = 'interchange_control_standards_identifier';

    /**
     * Code ‘0400’ specifies the standard issued as ANSI X12.5-1997.
     */
    const ISA_12 = 'interchange_control_version_number';

    /**
     *
     */
    const ISA_13 = 'isa_interchange_control_number';

    /**
     * Code ‘0’ indicates that no acknowledgment has been requested.
     */
    const ISA_14 = 'acknowledgement_requested';

    /**
     * Code ‘P’ indicates that the interchange envelope contains production data.
     */
    const ISA_15 = 'usage_indicator';

    /**
     *
     */
    const ISA_16 = 'component_element_separator';


    /**
     * Parse the segment content.
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
                $item = [self::ISA_00 => $item];
                break;
            case 1:
                $item = [self::ISA_01 => $item];
                break;
            case 2:
                $item = [self::ISA_02 => $item];
                break;
            case 3:
                $item = [self::ISA_03 => $item];
                break;
            case 4:
                $item = [self::ISA_04 => $item];
                break;
            case 5:
                $item = [self::ISA_05 => $item];
                break;
            case 6:
                $item = [self::ISA_06 => $item];
                break;
            case 7:
                $item = [self::ISA_07 => $item];
                break;
            case 8:
                $item = [self::ISA_08 => $item];
                break;
            case 9:
                $item = [self::ISA_09 => $item];
                break;
            case 10:
                $item = [self::ISA_10 => $item];
                break;
            case 11:
                $item = [self::ISA_11 => $item];
                break;
            case 12:
                $item = [self::ISA_12 => $item];
                break;
            case 13:
                $item = [self::ISA_13 => $item];
                break;
            case 14:
                $item = [self::ISA_14 => $item];
                break;
            case 15:
                $item = [self::ISA_15 => $item];
                break;
            case 16:
                $item = [self::ISA_16 => $item];
                break;
            default:
                break;
        }
    }
}