<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class N1Segment
 * @package Mrstroz\Edi\Segments
 */
class N1Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY,
        1 => 'entity_identifier_code', //Entity Identifier Code - Code identifying an organizational entity, a physical location, property or an individual / ST Ship To
        2 => 'name', //Free-form name
        3 => 'identification_code_qualifier', //Identification Code Qualifier - Code designating the system/method of code structure used for Identification Code (67)
        4 => 'identification_code', //Identification Code -  Code identifying a party or other code
    ];
}