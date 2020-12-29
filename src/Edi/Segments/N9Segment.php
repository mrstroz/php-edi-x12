<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class N9Segment
 * @package Mrstroz\Edi\Segments
 */
class N9Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Reference Identification,
        1 => 'reference_identification_qualifier', //Code qualifying the Reference Identification
        2 => 'reference_identification', //Reference information as defined for a particular Transaction Set or as specified by the Reference Identification Qualifier
    ];
}