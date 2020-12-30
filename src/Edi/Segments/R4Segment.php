<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class R4Segment
 * @package Mrstroz\Edi\Segments
 */
class R4Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time),
        1 => 'port_or_terminal_function_code', //Code defining function performed at the port or terminal with respect to a shipment
        2 => 'location_qualifier', // Code identifying type of location
        3 => 'location_identifier', //Code which identifies a specific location
        4 => 'port_name', //Free-form name for the place at which an offshore carrier originates or terminates (by transshipment or otherwise) its actual ocean carriage of property
        5 => 'country_code',
        6 => '',
        7 => '',
        8 => 'state_or_province_code', //Code (Standard State/Province) as defined by appropriate government agency
    ];
}