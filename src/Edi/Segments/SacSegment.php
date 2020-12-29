<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class SacSegment
 * @package Mrstroz\Edi\Segments
 */
class SacSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Service, Promotion, Allowance, or Charge Information
        1 => 'indicator', //Allowance or Charge Indicator
        2 => 'code', //Service, Promotion, Allowance, or Charge Code,
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => '',
        10 => '',
        11 => '',
        12 => '',
        13 => '',
        14 => '',
        15 => 'description', //Description
    ];
}