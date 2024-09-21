<?php

namespace Drupal\react_test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class ReactTestModuleController extends ControllerBase
{
    public function content()
    {

        return [

            "#markup" => '<div id="react-app"></div>',

            "#attached" => [

                "library" => ["react_test_module/react_test_module"],

            ],

        ];
    }
}
