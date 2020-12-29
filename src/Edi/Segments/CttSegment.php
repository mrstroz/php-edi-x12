<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class CttSegment
 * @package Mrstroz\Edi\Segments
 */
class CttSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify basic and most frequently used line item data
        1 => 'number_of_items', //Number of Line Items - Total number of line items in the transaction set
        2 => 'number_of_units', //Number of units - Total number of units ordered is also 1.
    ];
}