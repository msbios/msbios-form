<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Zend\ServiceManager\PluginManagerInterface;

/**
 * Interface FormElementManagerAwareInterface
 * @package MSBios\Form
 */
interface FormElementManagerAwareInterface
{
    /**
     * @return PluginManagerInterface
     */
    public function getFormElementManager(): PluginManagerInterface;

    /**
     * @param PluginManagerInterface $formElementManager
     * @return $this
     */
    public function setFormElementManager(PluginManagerInterface $formElementManager);
}