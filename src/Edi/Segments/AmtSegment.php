<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class AmtSegment
 * @package Mrstroz\Edi\Segments
 */
class AmtSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify basic and most frequently used line item data
        1 => 'amount_qualifier', //Code to qualify amount
        2 => 'amount', //Monetary Amount
    ];
}