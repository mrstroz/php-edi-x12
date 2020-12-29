<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class StSegment
 * @package Mrstroz\Edi\Segments
 */
class StSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //ST represents transaction set header. It marks the beginning of a transactions set and is used to assign a control number.
        1 => 'transaction_identifier_code',
        2 => 'transaction_control_number',
    ];
}