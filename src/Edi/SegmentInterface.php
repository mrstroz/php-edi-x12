<?php

namespace Mrstroz\Edi;


/**
 * Interface SegmentInterface
 * @package Mrstroz\Edi\Segments
 */
interface SegmentInterface
{
    /**
     * @param $segment
     * @return mixed
     */
    public function parse($segment);


    /**
     * @param $array
     * @return mixed
     */
    public function generate($array);
}