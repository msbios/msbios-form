<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Form\FormElementManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class FormElementManagerInitializer
 * @package MSBios\Form\Initializer
 */
class FormElementManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof FormElementManagerAwareInterface) {
            $instance->setFormElementManager(
                $container->get('FormElementManager')
            );
        }
    }

    /**
     * @param $an_array
     * @return FormElementManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
