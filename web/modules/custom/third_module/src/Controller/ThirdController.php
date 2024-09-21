<?php

namespace Drupal\third_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class ThirdController extends ControllerBase {

    public function third() {
        return [
            '#markup'=>$this->t('Hello man!'),
        ];
    }
}