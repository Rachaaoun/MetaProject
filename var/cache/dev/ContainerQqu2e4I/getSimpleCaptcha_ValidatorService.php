<?php

namespace ContainerQqu2e4I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimpleCaptcha_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'simple_captcha.validator' shared service.
     *
     * @return \Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidSimpleCaptchaValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'captcha-com'.\DIRECTORY_SEPARATOR.'symfony-captcha-bundle'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'ValidSimpleCaptchaValidator.php';

        return $container->services['simple_captcha.validator'] = new \Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidSimpleCaptchaValidator($container);
    }
}
