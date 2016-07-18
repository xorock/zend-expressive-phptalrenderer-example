<?php

use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Expressive\Phptal\HelperManager;
use Zend\Expressive\Phptal\Helper;

return [
    'dependencies' => [
        'factories' => [
            'Zend\Expressive\FinalHandler' =>
                Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,
            Zend\Expressive\Template\TemplateRendererInterface::class =>
                Zend\Expressive\Phptal\PhptalRendererFactory::class,
            
            HelperManager::class => InvokableFactory::class,
            Helper\UrlHelper::class => Helper\UrlHelperFactory::class,
            Helper\ServerUrlHelper::class => Helper\ServerUrlHelperFactory::class,
        ],
    ],

    'debug' => true,
    
    'templates' => [
        'extension' => 'html',
//        'paths'     => [
//            'templates',
//        ],
        'paths' => 'templates'
    ],

    'phptal' => [
        'cache_dir'            => 'data/cache/phptal',
        'cache_purge_mode'     => false,
        'cache_lifetime'       => 30, //days
        'compress_whitespace'  => false,
        'strip_comments'       => false,
        'encoding'             => 'UTF-8',
    ],
];
