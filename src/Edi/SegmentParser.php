<?php

namespace Mrstroz\Edi;

/**
 * Class SegmentParser
 * @package Mrstroz\Parse
 */
class SegmentParser
{

    public static $segmentMapping = [
        'ISA' => 'Mrstroz\Edi\Segments\IsaSegment',
        'GS' => 'Mrstroz\Edi\Segments\GsSegment',
        'ST' => 'Mrstroz\Edi\Segments\StSegment',
        'BEG' => 'Mrstroz\Edi\Segments\BegSegment',
        'REF' => 'Mrstroz\Edi\Segments\RefSegment',
        'PER' => 'Mrstroz\Edi\Segments\PerSegment',
        'FOB' => 'Mrstroz\Edi\Segments\FobSegment',
        'SAC' => 'Mrstroz\Edi\Segments\SacSegment',
        'DTM' => 'Mrstroz\Edi\Segments\DtmSegment',
        'TD1' => 'Mrstroz\Edi\Segments\Td1Segment',
        'TD5' => 'Mrstroz\Edi\Segments\Td5Segment',
        'TD4' => 'Mrstroz\Edi\Segments\Td4Segment',
        'N9' => 'Mrstroz\Edi\Segments\N9Segment',
        'MSG' => 'Mrstroz\Edi\Segments\MsgSegment',
        'N1' => 'Mrstroz\Edi\Segments\N1Segment',
        'N2' => 'Mrstroz\Edi\Segments\N2Segment',
        'N3' => 'Mrstroz\Edi\Segments\N3Segment',
        'N4' => 'Mrstroz\Edi\Segments\N4Segment',
        'PO1' => 'Mrstroz\Edi\Segments\Po1Segment',
        'PID' => 'Mrstroz\Edi\Segments\PidSegment',
        'TC2' => 'Mrstroz\Edi\Segments\Tc2Segment',
        'CTT' => 'Mrstroz\Edi\Segments\CttSegment',
        'ATM' => 'Mrstroz\Edi\Segments\AmtSegment',
        'SE' => 'Mrstroz\Edi\Segments\SeSegment',
        'GE' => 'Mrstroz\Edi\Segments\GeSegment',
        'IEA' => 'Mrstroz\Edi\Segments\IeaSegment',
    ];

    /**
     * @param array $documents
     * @return array
     */
    public static function parseAllSegmentsAsArray(array $documents)
    {
        $documentParsed = array();
        foreach ($documents as $document) {
            foreach ($document->getSegments() as $segment) {
                if (isset(self::$segmentMapping[$segment[0]])) {
                    $className = self::$segmentMapping[$segment[0]];
                    $documentParsed[] = $className::parse($segment);
                }
            }
        }

        return $documentParsed;
    }
}
