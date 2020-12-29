<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Td1Segment
 * @package Mrstroz\Edi\Segments
 */
class Td1Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Quantity and Weight)
        1 => 'packaging_code', //Packaging Code Description: Code identifying the type of packaging; Part 1: Packaging Form, Part 2: Packaging Material; if the Data Element is used, then Part 1 is always required
        2 => 'landing_quantity', //Number of units (pieces) of the lading commodity
        3 => '',
        4 => '',
        5 => 'landing_description', //Description of an item as required for rating and billing purposes
        6 => 'weight_qualifier', //Code defining the type of weight
        7 => 'weight', //Numeric value of weight
        8 => 'uom_code', //Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
    ];
}