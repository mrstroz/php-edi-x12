<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Po1Segment
 * @package Mrstroz\Edi\Segments
 */
class Po1Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Baseline Item Data
        1 => 'assigned_identification', //Assigned Identification - Alphanumeric characters assigned for differentiation within a transaction set - This is the line item number that must be returned on subsequent documents to Insight such as the 855, 856, 810 and 870.
        2 => 'quantity_ordered', //Quantity Ordered
        3 => 'measurement_code', //Unit or Basis for Measurement Code - Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken - EA-Each, DZ- Dozen
        4 => 'unit_price', //Unit Price -  Price per unit of product, service, commodity, etc.
        5 => 'base_unit_price_code', //Basis of Unit Price Code - Code identifying the type of unit price for an item - CP Current Price (Subject to Change)
        6 => 'buyer_product_id_qualifier', //Qualifier for Buyer - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
        7 => 'buyer_product_id',
        8 => 'vendor_product_id_qualifier', //Qualifier for Vendor - Identifying number for a product or service - VP Vendor's (Seller's) Part Number
        9 => 'vendor_product_id', //Vendor Item Number - Identifying number for a product or service
    ];
}