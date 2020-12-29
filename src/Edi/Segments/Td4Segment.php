<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Td4Segment
 * @package Mrstroz\Edi\Segments
 */
class Td4Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time)
        1 => 'special_handling_code', //Code specifying the method or type of transportation for the shipment
        2 => '',
        3 => '',
        4 => 'description', //A free-form description to clarify the related data elements and their content
    ];
}