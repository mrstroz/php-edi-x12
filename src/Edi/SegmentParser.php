<?php

namespace Mrstroz\Edi;

use Mrstroz\Edi;

/**
 * Class SegmentParser
 * @package Mrstroz\Parse
 */
class SegmentParser
{
    /**
     * @param array $documents
     * @return array
     */
    public static function parseAllSegmentsAsArray(array $documents)
    {
        $documentParsed = array();
        foreach ($documents as $document) {
            foreach ($document->getSegments() as $segment) {
                if (isset(Edi::$segmentMapping[$segment[0]])) {
                    $className = Edi::$segmentMapping[$segment[0]];
                    $documentParsed[] = (new $className)->parse($segment);
                }
            }
        }

        return $documentParsed;
    }
}
