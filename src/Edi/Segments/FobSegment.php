<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class FobSegment
 * @package Mrstroz\Edi\Segments
 */
class FobSegment extends Segment
{

    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //F.O.B. Related Instructions
        1 => 'shipment_method_of_payment', //Code identifying payment terms for transportation charges
        2 => 'location_qualifier', //Code identifying type of location
        3 => 'description', //Description
        4 => 'transportation_terms_qualifier', //Code identifying the source of the transportation terms
        5 => 'transportation_terms_code', //Code identifying the trade terms which apply to the shipment transportation responsibility
    ];
}