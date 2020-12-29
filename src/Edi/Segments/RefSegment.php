<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class RefSegment
 * @package Mrstroz\Edi\Segments
 */
class RefSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Reference Identification - To specify identifying information
        1 => 'reference_qualifier', //Reference Identification Qualifier - Code qualifying the Reference Identification
        2 => 'reference_value', //Reference Identification - Reference information as defined for a particular Transaction Set or as specified by the Reference Identification Qualifier
    ];
}