<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Zend\Form\FormInterface;

/**
 * Interface FormElementAwareInterface
 * @package MSBios\Form
 */
interface FormElementAwareInterface
{
    /**
     * @return FormInterface
     */
    public function getFormElement();

    /**
     * @param FormInterface $formElement
     * @return $this
     */
    public function setFormElement(FormInterface $formElement);
}