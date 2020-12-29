<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Td5Segment
 * @package Mrstroz\Edi\Segments
 */
class Td5Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time),
        1 => '',
        2 => '',
        3 => '',
        4 => 'transportation_code', //Code specifying the method or type of transportation for the shipment
        5 => 'routing', //Free-form description of the routing or requested routing for shipment, or the originating carrier's identity
    ];
}