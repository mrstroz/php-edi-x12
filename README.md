# PHP EDI X12
A framework for parsing and generating EDI X12 documents in PHP.

Library built on top of [aonach/php-edi](https://github.com/aonach/php-edi) and [PopeFelix/php-edi](https://github.com/PopeFelix/php-edi), rebuild later by INWAVE Team.

## Usage

```php
use Mrstroz\Parse\SegmentParser;
use Mrstroz\Parser;

$documents = Parser::parseFile('./data/edi/edi-message.txt');
$segments = SegmentParser::parseAllSegmentsAsArray($documents);
```
