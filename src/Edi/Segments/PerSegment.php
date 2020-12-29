<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class PerSegment
 * @package Mrstroz\Edi\Segments
 */
class PerSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Administrative Communications Contact
        1 => 'contact_qualifier', //Contact Function Code
        2 => 'contact_name', //Name
        3 => 'contact_communication_qualifier_1', //Communication Number Qualifier
        4 => 'contact_number_1', //Communication Number
        5 => 'contact_communication_qualifier_2', //Communication Number Qualifier
        6 => 'contact_number_2', //Communication Number
    ];
}