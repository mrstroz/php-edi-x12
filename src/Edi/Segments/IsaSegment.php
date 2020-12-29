<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class IsaSegment
 * @package Mrstroz\Edi\Segments
 */
class IsaSegment extends Segment
{
    /**
     * Map segment indexes into keys
     */
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, // ISA represents interchange control header.
        1 => 'authorization_information_qualifier', //Code 00 indicates that no authorization information present in I02.
        2 => 'authorization_information',
        3 => 'security_information_qualifier', //Code 00 indicates that no security information present in I01.
        4 => 'security_information',
        5 => 'interchange_id_qualifier',
        6 => 'interchange_sender_id',
        7 => 'interchange_id_qualifier',
        8 => 'interchange_receiver_id',
        9 => 'interchange_date',
        10 => 'interchange_time',
        11 => 'interchange_control_standards_identifier', //‘U’ indicates that U.S. EDI Community of ASC X12, TDCC, and UCS is responsible for the control standard used by the message.
        12 => 'interchange_control_version_number', //Code ‘0400’ specifies the standard issued as ANSI X12.5-1997.
        13 => 'isa_interchange_control_number',
        14 => 'acknowledgement_requested', //Code ‘0’ indicates that no acknowledgment has been requested.
        15 => 'usage_indicator', //Code ‘P’ indicates that the interchange envelope contains production data.
        16 => 'component_element_separator'
    ];

    public $callFunction = [
        0 => ['name' => 'str_pad', 'args' => [3]],
        1 => ['name' => 'str_pad', 'args' => [2]],
        2 => ['name' => 'str_pad', 'args' => [10]],
        3 => ['name' => 'str_pad', 'args' => [2]],
        4 => ['name' => 'str_pad', 'args' => [10]],
        5 => ['name' => 'str_pad', 'args' => [2]],
        6 => ['name' => 'str_pad', 'args' => [15]],
        7 => ['name' => 'str_pad', 'args' => [2]],
        8 => ['name' => 'str_pad', 'args' => [15]],
        9 => ['name' => 'str_pad', 'args' => [6]],
        10 => ['name' => 'str_pad', 'args' => [4]],
        11 => ['name' => 'str_pad', 'args' => [1]],
        12 => ['name' => 'str_pad', 'args' => [5]],
        13 => ['name' => 'str_pad', 'args' => [9]],
        14 => ['name' => 'str_pad', 'args' => [1]],
        15 => ['name' => 'str_pad', 'args' => [1]],
        16 => ['name' => 'str_pad', 'args' => [1]],
    ];
}