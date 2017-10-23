<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Zend\Form\FormInterface;

/**
 * Trait FormElementAwareTrait
 * @package MSBios\Form
 */
trait FormElementAwareTrait
{
    /** @var FormInterface */
    protected $formElement;

    /**
     * @return FormInterface
     */
    public function getFormElement(): FormInterface
    {
        return $this->formElement;
    }

    /**
     * @param FormInterface $formElement
     * @return $this
     */
    public function setFormElement(FormInterface $formElement)
    {
        $this->formElement = $formElement;
        return $this;
    }
}
