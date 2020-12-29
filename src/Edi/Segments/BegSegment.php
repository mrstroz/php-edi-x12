<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class BegSegment
 * @package Mrstroz\Edi\Segments
 */
class BegSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //ST represents the beginning segment of the purchase order.
        1 => 'transaction_purpose_code', //Transaction Set Purpose Code - 00 represents a new purchase order.
        2 => 'purchase_order_type_code', //Purchase Order Type Code - DS Dropship / SA Stand-alone Order
        3 => 'purchase_order_number',// Identifying number for Purchase Order assigned by the orderer/purchaser
        4 => 'release_number', //Number identifying a release against a Purchase Order previously placed by the parties involved in the transaction
        5 => 'purchase_order_date', //Date of issuance
    ];
}