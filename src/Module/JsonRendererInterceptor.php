<?php

namespace Kawanamiyuu\VuejsSpa\Module;

use BEAR\Resource\JsonRenderer;
use BEAR\Resource\ResourceObject;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class JsonRendererInterceptor implements MethodInterceptor
{
    /**
     * {@inheritdoc}
     */
    public function invoke(MethodInvocation $invocation)
    {
        $ro = $invocation->getThis();
        /* @var $ro ResourceObject */
        $ro->setRenderer(new JsonRenderer);

        return $invocation->proceed();
    }
}
