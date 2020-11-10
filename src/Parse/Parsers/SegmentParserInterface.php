<?php

namespace Mrstroz\Parse\Parsers;


/**
 * Interface SegmentParserInterface
 * @package Mrstroz\Parse\Parsers
 */
interface SegmentParserInterface {


    /**
     * @param $segment
     * @return mixed
     */
    public static function parse($segment);
}