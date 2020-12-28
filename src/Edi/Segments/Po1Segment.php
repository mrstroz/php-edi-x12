<?php

namespace Mrstroz\Edi\Segments;


/**
 * Class Po1Segment
 * @package Mrstroz\Edi\Segments
 */
class Po1Segment implements SegmentInterface
{

    /**
     * Baseline Item Data
     */
    const PO1_00 = 'edi_qualifier';

    /**
     * Assigned Identification - Alphanumeric characters assigned for differentiation within a transaction set - This is the line item number that must be returned on subsequent documents to Insight such as the 855, 856, 810 and 870.
     */
    const PO1_01 = 'assigned_identification';

    /**
     * Quantity Ordered
     */
    const PO1_02 = 'quantity_ordered';

    /**
     * Unit or Basis for Measurement Code - Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken - EA-Each, DZ- Dozen
     */
    const PO1_03 = 'measurement_code';

    /**
     * Unit Price -  Price per unit of product, service, commodity, etc.
     */
    const PO1_04 = 'unit_price';

    /**
     * Basis of Unit Price Code - Code identifying the type of unit price for an item - CP Current Price (Subject to Change)
     */
    const PO1_05 = 'base_unit_price_code';

    /**
     * Qualifier for Buyer - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
     */
    const PO1_06 = 'buyer_product_id_qualifier';

    /**
     * Buyer Item Number - Identifying number for a product or service
     */
    const PO1_07 = 'buyer_product_id';

    /**
     * Qualifier for Vendor - Identifying number for a product or service - VP Vendor's (Seller's) Part Number
     */
    const PO1_08 = 'vendor_product_id_qualifier';

    /**
     * Vendor Item Number - Identifying number for a product or service
     */
    const PO1_09 = 'vendor_product_id';

    /**
     * @param $segment
     * @return array
     */
    public static function parse($segment)
    {
        $content = array();
        array_walk_recursive($segment, 'self::setContentType');
        foreach ($segment as $key => $item) {
            if ($item) {
                $content[key($item)] = $item[key($item)];
            }
        }

        return $content;
    }

    /**
     * Set the the key to a meaningfull value.
     * @param $item
     * @param $key
     */
    private static function setContentType(&$item, $key)
    {
        switch ($key) {
            case 0:
                $item = [self::PO1_00 => $item];
                break;
            case 1:
                $item = [self::PO1_01 => $item];
                break;
            case 2:
                $item = [self::PO1_02 => $item];
                break;
            case 3:
                $item = [self::PO1_03 => $item];
                break;
            case 4:
                $item = [self::PO1_04 => $item];
                break;
            case 5:
                $item = [self::PO1_05 => $item];
                break;
            case 6:
                $item = [self::PO1_06 => $item];
                break;
            case 7:
                $item = [self::PO1_07 => $item];
                break;
            case 8:
                $item = [self::PO1_08 => $item];
                break;
            case 9:
                $item = [self::PO1_09 => $item];
                break;
            default:
                break;
        }
    }
}