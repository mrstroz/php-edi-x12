<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class BegSegment
 * @package Mrstroz\Edi\Segments
 */
class B4Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY,
        1 => 'special_handling_code',
        2 => '',
        3 => 'shipment_status_code',
        4 => 'status_date',
        5 => 'status_time',
        6 => '',
        7 => '',
        8 => '',
        9 => '',
        10 => '',
        11 => 'location_identifier',
        12 => 'location_qualifier',
    ];
}