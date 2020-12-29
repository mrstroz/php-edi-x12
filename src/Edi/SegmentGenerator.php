<?php

namespace Mrstroz\Edi;


use Mrstroz\Edi;

/**
 * Class SegmentGenerator
 * @package Mrstroz\Edi
 */
class SegmentGenerator
{
    /**
     * @param $array
     * @return string
     */
    public static function generateLineFromArray($array)
    {
        $qualifier = $array[Segment::EDI_QUALIFIER_KEY] ?? null;
        if ($qualifier && isset(Edi::$segmentMapping[$qualifier])) {
            $className = Edi::$segmentMapping[$qualifier];
            return (new $className)->generate($array);
        }
        return '';
    }
}
