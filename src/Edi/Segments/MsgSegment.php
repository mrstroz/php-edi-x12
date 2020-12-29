<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class MsgSegment
 * @package Mrstroz\Edi\Segments
 */
class MsgSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Message Text
        1 => 'text', //Free-form message text
    ];
}