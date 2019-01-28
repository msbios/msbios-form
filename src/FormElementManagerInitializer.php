<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Form;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class FormElementManagerInitializer
 * @package MSBios\Form
 */
class FormElementManagerInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
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
     * @inheritdoc
     *
     * @param $an_array
     * @return FormElementManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
