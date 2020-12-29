<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class N3Segment
 * @package Mrstroz\Edi\Segments
 */
class N3Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Address Information
        1 => 'address_information_1', //Address Information
        2 => 'address_information_2', //Address Information
    ];
}