<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class GsSegment
 * @package Mrstroz\Edi\Segments
 */
class GsSegment extends Segment
{

    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //GS represents functional group header. It marks the beginning of a functional group and is used to provide control information.
        1 => 'functional_code_identifier', //The code ‘PO’ indicates purchase order
        2 => 'application_sender_code',
        3 => 'application_receiver_code',
        4 => 'date',
        5 => 'time',
        6 => 'gs_group_control_number',
        7 => 'agency_code', //Agency Code is X which represents Accredited Standards Committee X12
        8 => 'version', //Version/Release/Industry Identifier Code. The code 004010 indicates that the draft standards approved for publication by ASC X12 Procedures Review Board through October 1997.
    ];
}