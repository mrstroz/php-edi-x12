<?php

namespace Mrstroz\Parse;


use Mrstroz\Parse\Parsers\AmtParser;
use Mrstroz\Parse\Parsers\BegParser;
use Mrstroz\Parse\Parsers\CttParser;
use Mrstroz\Parse\Parsers\DtmParser;
use Mrstroz\Parse\Parsers\FobParser;
use Mrstroz\Parse\Parsers\GeParser;
use Mrstroz\Parse\Parsers\GsParser;
use Mrstroz\Parse\Parsers\IeaParser;
use Mrstroz\Parse\Parsers\IsaParser;
use Mrstroz\Parse\Parsers\MsgParser;
use Mrstroz\Parse\Parsers\N1Parser;
use Mrstroz\Parse\Parsers\N2Parser;
use Mrstroz\Parse\Parsers\N3Parser;
use Mrstroz\Parse\Parsers\N4Parser;
use Mrstroz\Parse\Parsers\N9Parser;
use Mrstroz\Parse\Parsers\PerParser;
use Mrstroz\Parse\Parsers\PidParser;
use Mrstroz\Parse\Parsers\Po1Parser;
use Mrstroz\Parse\Parsers\RefParser;
use Mrstroz\Parse\Parsers\SacParser;
use Mrstroz\Parse\Parsers\SeParser;
use Mrstroz\Parse\Parsers\StParser;
use Mrstroz\Parse\Parsers\Tc2Parser;
use Mrstroz\Parse\Parsers\Td1Parser;
use Mrstroz\Parse\Parsers\Td4Parser;
use Mrstroz\Parse\Parsers\Td5Parser;

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
    public static function parseAllSegments(array $documents)
    {
        $documentParsed = array();
        foreach ($documents as $document) {
            foreach ($document->getSegments() as $segment) {
                switch ($segment[0]) {
                    case 'ISA':
                        $documentParsed = array_merge_recursive($documentParsed, IsaParser::parse($segment));
                        break;
                    case 'GS';
                        $documentParsed = array_merge_recursive($documentParsed, GsParser::parse($segment));
                        break;
                    case 'ST';
                        $documentParsed = array_merge_recursive($documentParsed, StParser::parse($segment));
                        break;
                    case 'BEG';
                        $documentParsed = array_merge_recursive($documentParsed, BegParser::parse($segment));
                        break;
                    case 'N1';
                        $documentParsed = array_merge_recursive($documentParsed, N1Parser::parse($segment));
                        break;
                    case 'PO1';
                        $documentParsed['po1'][] = Po1Parser::parse($segment);
                        break;
                    case 'CTT';
                        $documentParsed = array_merge_recursive($documentParsed, CttParser::parse($segment));
                        break;
                    case 'SE';
                        $documentParsed = array_merge_recursive($documentParsed, SeParser::parse($segment));
                        break;
                    case 'GE';
                        $documentParsed = array_merge_recursive($documentParsed, GeParser::parse($segment));
                        break;
                    case 'IEA';
                        $documentParsed = array_merge_recursive($documentParsed, IeaParser::parse($segment));
                        break;
                    case 'DTM';
                        $documentParsed['dtm'][] = DtmParser::parse($segment);
                    default:
                        break;

                };
            }

        }

        return $documentParsed;
    }

    /**
     * @param array $documents
     * @return array
     */
    public static function parseAllSegmentsAsArray(array $documents)
    {
        $documentParsed = array();
        foreach ($documents as $document) {
            foreach ($document->getSegments() as $segment) {
                switch ($segment[0]) {
                    case 'ISA':
                        $documentParsed[] = IsaParser::parse($segment);
                        break;
                    case 'GS';
                        $documentParsed[] = GsParser::parse($segment);
                        break;
                    case 'ST';
                        $documentParsed[] = StParser::parse($segment);
                        break;
                    case 'BEG';
                        $documentParsed[] = BegParser::parse($segment);
                        break;
                    case 'REF';
                        $documentParsed[] = RefParser::parse($segment);
                        break;
                    case 'PER';
                        $documentParsed[] = PerParser::parse($segment);
                        break;
                    case 'FOB';
                        $documentParsed[] = FobParser::parse($segment);
                        break;
                    case 'SAC';
                        $documentParsed[] = SacParser::parse($segment);
                        break;
                    case 'DTM';
                        $documentParsed[] = DtmParser::parse($segment);
                        break;
                    case 'TD1';
                        $documentParsed[] = Td1Parser::parse($segment);
                        break;
                    case 'TD5';
                        $documentParsed[] = Td5Parser::parse($segment);
                        break;
                    case 'TD4';
                        $documentParsed[] = Td4Parser::parse($segment);
                        break;
                    case 'N9';
                        $documentParsed[] = N9Parser::parse($segment);
                        break;
                    case 'MSG';
                        $documentParsed[] = MsgParser::parse($segment);
                        break;
                    case 'N1';
                        $documentParsed[] = N1Parser::parse($segment);
                        break;
                    case 'N2';
                        $documentParsed[] = N2Parser::parse($segment);
                        break;
                    case 'N3';
                        $documentParsed[] = N3Parser::parse($segment);
                        break;
                    case 'N4';
                        $documentParsed[] = N4Parser::parse($segment);
                        break;
                    case 'PO1';
                        $documentParsed[] = Po1Parser::parse($segment);
                        break;
                    case 'PID';
                        $documentParsed[] = PidParser::parse($segment);
                        break;
                    case 'TC2';
                        $documentParsed[] = Tc2Parser::parse($segment);
                        break;
                    case 'CTT';
                        $documentParsed[] = CttParser::parse($segment);
                        break;
                    case 'ATM';
                        $documentParsed[] = AmtParser::parse($segment);
                        break;
                    case 'SE';
                        $documentParsed[] = SeParser::parse($segment);
                        break;
                    case 'GE';
                        $documentParsed[] = GeParser::parse($segment);
                        break;
                    case 'IEA';
                        $documentParsed[] = IeaParser::parse($segment);
                        break;
                    default:
                        break;
                }
            }

        }

        return $documentParsed;
    }
}
