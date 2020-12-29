<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class GeSegment
 * @package Mrstroz\Edi\Segments
 */
class GeSegment extends Segment
{

    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To indicate the end of a functional group and to provide control information
        1 => 'number_of_transactions', //Number of Transaction Sets Included - Total number of transaction sets included in the functional group or interchange (transmission) group terminated by the trailer containing this data element
        2 => 'ge_group_control_number', //Group Control Number -  Assigned number originated and maintained by the sender
    ];
}
