<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Form\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Form\FormAwareInterface;
use Zend\Form\FormElementManager\FormElementManagerV3Polyfill;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class FormAwareInitializer
 * @package MSBios\Form\Initializer
 */
class FormAwareInitializer implements InitializerInterface
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
        if ($instance instanceof FormAwareInterface) {

            /** @var string $className */
            $className = get_class($instance);

            /** @var FormElementManagerV3Polyfill $formElementManager */
            $formElementManager = $container->get('FormElementManager');

            if ($formElementManager->has($className)) {
                $instance->setForm(
                    $formElementManager->get($className)
                );
            }
        }
    }

    /**
     * @param $an_array
     * @return FormAwareInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
