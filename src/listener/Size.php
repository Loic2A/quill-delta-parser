<?php

namespace nadar\quill\listener;

use nadar\quill\Line;
use nadar\quill\InlineListener;

/**
 * Convert color attributes into span tag.
 */
class Size extends InlineListener
{
    /**
     * {@inheritDoc}
     */
    public function process(Line $line)
    {
        if (($size = $line->getAttribute('size'))) {
            $this->updateInput($line, '<span style="font-size:'.$line->getLexer()->escape($size).'">'.$line->getInput().'</span>');
        }
    }
}