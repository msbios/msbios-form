<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Zend\ServiceManager\PluginManagerInterface;

/**
 * Trait FormElementManagerAwareTrait
 * @package MSBios\Form
 */
trait FormElementManagerAwareTrait
{
    /** @var PluginManagerInterface */
    protected $formElementManager;

    /**
     * @return PluginManagerInterface
     */
    public function getFormElementManager(): PluginManagerInterface
    {
        return $this->formElementManager;
    }

    /**
     * @param PluginManagerInterface $formElementManager
     * @return $this
     */
    public function setFormElementManager(PluginManagerInterface $formElementManager)
    {
        $this->formElementManager = $formElementManager;
        return $this;
    }
}
