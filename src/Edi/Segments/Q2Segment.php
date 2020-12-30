<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Q2Segment
 * @package Mrstroz\Edi\Segments
 */
class Q2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time),
        1 => 'vessel_code', //Code identifying vessel
        2 => '',
        3 => '',
        4 => 'sailing_date', //Scheduled Sailing Date
        5 => 'discharge_date', // Scheduled Discharge Date
        6 => 'lading_quantity', // Number of units (pieces) of the lading commodity
        7 => 'weight',
        8 => 'weight_qualifier',
        9 => 'flight_voyage_number', //Identifying designator for the particular flight or voyage on which the cargo travels,
        10 => '',
        11 => '',
        12 => 'vessel_code_qualifier', // Code specifying vessel code source,
        13 => 'vessel_name', // Name of ship as documented in "Lloyd's Register of Ships"
        14 => '',
        15 => '',
        16 => 'weight_unit_code', // Code specifying the weight unit
    ];
}