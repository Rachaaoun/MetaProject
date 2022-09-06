<?php

namespace ContainerQqu2e4I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimpleCaptcha_Form_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'simple_captcha.form.type' shared service.
     *
     * @return \Captcha\Bundle\CaptchaBundle\Form\Type\SimpleCaptchaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'captcha-com'.\DIRECTORY_SEPARATOR.'symfony-captcha-bundle'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'SimpleCaptchaType.php';

        return $container->services['simple_captcha.form.type'] = new \Captcha\Bundle\CaptchaBundle\Form\Type\SimpleCaptchaType($container, $container->parameters['captcha.config']);
    }
}
