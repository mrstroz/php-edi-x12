<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Tc2Segment
 * @package Mrstroz\Edi\Segments
 */
class Tc2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Quantity and Weight)
        1 => 'commodity_code_qualifier', //Code identifying the commodity coding system used for Commodity Code
        2 => 'commodity_code', //Code describing a commodity or group of commodities
    ];
}