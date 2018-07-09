<?php

namespace Zend\EntityMapper\Config;

use Zend\Filter\FilterInterface;

/**
 * Field
 *
 * Field configuration class.
 *
 * @package Zend\EntityMapper\Config
 */
class Field
{
    protected $property = '';

    /**
     * When the field name in the database is not the same as in the
     * class the database field name should be set here.
     *
     * @var string
     */
    protected $alias = '';

    /**
     * Filter to change the data before performing any input in the
     * database, like select, insert, update or delete.
     *
     * @var string
     */
    protected $inputFilter;

    /**
     * Filter to change the data before injecting it into the entity.
     *
     * @var string
     */
    protected $outputFilter;

    /**
     * Foreign key configuration.
     *
     * @var ForeignKey
     */
    protected $foreignKey;

    /**
     * @var Collection
     */
    protected $collection;

    /**
     * @var bool
     */
    protected $primaryKey;

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     */
    public function setProperty(string $property)
    {
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        if(empty($this->alias)) {
            return $this->property;
        }

        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getInputFilter(): string
    {
        return $this->inputFilter;
    }

    /**
     * @param string $inputFilter
     */
    public function setInputFilter(string $inputFilter)
    {
        $this->inputFilter = $inputFilter;
    }

    /**
     * @return bool
     */
    public function hasInputFilter(): bool
    {
        return (!empty($this->inputFilter)) && class_exists($this->inputFilter);
    }

    /**
     * @return string
     */
    public function getOutputFilter(): string
    {
        return $this->outputFilter;
    }

    /**
     * @param string $outputFilter
     */
    public function setOutputFilter(string $outputFilter)
    {
        $this->outputFilter = $outputFilter;
    }

    /**
     * @return bool
     */
    public function hasOutputFilter(): bool
    {
        return (!empty($this->outputFilter)) && class_exists($this->outputFilter);
    }

    /**
     * @return ForeignKey
     */
    public function getForeignKey(): ForeignKey
    {
        return $this->foreignKey;
    }

    /**
     * @param ForeignKey $foreignKey
     */
    public function setForeignKey(ForeignKey $foreignKey)
    {
        $this->foreignKey = $foreignKey;
    }

    /**
     * @return bool
     */
    public function isForeignKey(): bool
    {
        return $this->foreignKey instanceof ForeignKey;
    }

    /**
     * @return Collection
     */
    public function getCollection(): Collection
    {
        return $this->collection;
    }

    /**
     * @param Collection $collection
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return bool
     */
    public function isCollection(): bool
    {
        return $this->collection instanceof Collection;
    }

    /**
     * @return bool
     */
    public function isPrimaryKey(): bool
    {
        return $this->primaryKey === true;
    }

    /**
     * @param bool $primaryKey
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;
    }
}