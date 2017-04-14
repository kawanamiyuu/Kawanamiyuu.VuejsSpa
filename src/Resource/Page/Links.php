<?php

namespace Kawanamiyuu\VuejsSpa\Resource\Page;

use BEAR\Resource\ResourceObject;
use Kawanamiyuu\VuejsSpa\Annotation\Api;

/**
 * @Api
 */
class Links extends ResourceObject
{
    public function onGet() : ResourceObject
    {
        $this['essential_links'] = [
            [
                'label' => 'Core Docs',
                'url' => 'https://vuejs.org'
            ],
            [
                'label' => 'Forum',
                'url' => 'https://forum.vuejs.org'
            ],
            [
                'label' => 'Gitter Chat',
                'url' => 'https://gitter.im/vuejs/vue'
            ],
            [
                'label' => 'Twitter',
                'url' => 'https://twitter.com/vuejs'
            ],
            [
                'label' => 'Docs for This Template',
                'url' => 'http://vuejs-templates.github.io/webpack/'
            ]
        ];

        $this['ecosystem_links'] = [
            [
                'label' => 'vue-router',
                'url' => 'http://router.vuejs.org/',
            ],
            [
                'label' => 'vuex',
                'url' => 'http://vuex.vuejs.org/'
            ],
            [
                'label' => 'vue-loader',
                'url' => 'http://vue-loader.vuejs.org/'
            ],
            [
                'label' => 'awesome-vue',
                'url' => 'https://github.com/vuejs/awesome-vue'
            ]
        ];

        return $this;
    }
}
