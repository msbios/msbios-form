<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

/**
 * Class Module
 * @package MSBios\Form
 */
class Module extends \MSBios\Module
{
    /** @const VERSION */
    const VERSION = '2.0.0';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir(): string
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace(): string
    {
        return __NAMESPACE__;
    }
}
