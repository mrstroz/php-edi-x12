<?php

namespace Mrstroz\Edi;

/**
 * Class Document
 * @package Mrstroz\Parse
 */
class Document
{
    /**
     * @var array
     */
    private $segments = array();

    /**
     * Document constructor.
     * @param $segments
     */
    function __construct($segments)
    {
        $this->segments = $segments;
    }

    /**
     * @return string
     */
    function __toString()
    {
        $str = '';
        foreach ($this->segments as $segment) {
            foreach ($segment as &$element) {
                if (is_array($element)) {
                    $element = implode('>', $element);
                }
            }
            $str .= implode('*', $segment);
            $str .= "\n";
        }
        return $str;
    }

    /**
     * @return array
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * @param array $segments
     */
    public function setSegments(array $segments): void
    {
        $this->segments = $segments;
    }
}
