<?php

namespace Mrstroz\Edi\Segments;


/**
 * Interface SegmentInterface
 * @package Mrstroz\Edi\Segments
 */
interface SegmentInterface {


    /**
     * @param $segment
     * @return mixed
     */
    public static function parse($segment);
}