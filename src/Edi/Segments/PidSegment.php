<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class PidSegment
 * @package Mrstroz\Edi\Segments
 */
class PidSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Product/Item Description
        1 => 'item_description_type', //Code indicating the format of a description
        2 => 'product_characteristic_code', //Code identifying the general class of a product or process characteristic
        3 => '',
        4 => '',
        5 => 'description', //Description
    ];
}