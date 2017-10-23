<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Zend\Form\FormInterface;

/**
 * Interface FormAwareInterface
 * @package MSBios\Form
 */
interface FormAwareInterface
{
    /**
     * @return FormInterface
     */
    public function getForm();

    /**
     * @param FormInterface $form
     * @return $this
     */
    public function setForm(FormInterface $form);
}
