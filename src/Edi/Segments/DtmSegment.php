<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class DtmSegment
 * @package Mrstroz\Edi\Segments
 */
class DtmSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify pertinent dates and times
        1 => 'date_qualifier', //Date/Time Qualifier
        2 => 'date', //Date - CCYYMMDD
    ];
}