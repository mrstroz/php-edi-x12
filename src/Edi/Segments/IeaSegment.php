<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class IeaSegment
 * @package Mrstroz\Edi\Segments
 */
class IeaSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To define the end of an interchange of zero or more functional groups and interchange-related control segments
        1 => 'number_of_functional_groups', //Number of Included Functional Groups - A count of the number of functional groups included in an interchange
        2 => 'iea_interchange_control_number', //Interchange Control Number - A control number assigned by the interchange sender
    ];
}
