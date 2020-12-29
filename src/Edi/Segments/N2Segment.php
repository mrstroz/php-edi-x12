<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class N2Segment
 * @package Mrstroz\Edi\Segments
 */
class N2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Additional Name Information
        1 => 'name' //Free-form name
    ];
}