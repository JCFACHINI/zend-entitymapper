<?php

namespace Zend\EntityMapper\Db\Select\Parsing;

use Zend\EntityMapper\Db\Select\Parsing\Base\AbstractObjectParser;

/**
 * UpdateParser
 *
 * @package Zend\EntityMapper\Db\Select\Parsing
 */
class UpdateParser extends AbstractObjectParser
{
    /**
     * @return array
     */
    public function parse(): array
    {
        return [
            'fields' => $this->parseFields(),
            'where'  => $this->parseWhere()
        ];
    }
}