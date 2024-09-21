<?php

namespace Drupal\palindrome_module\Controller;

use Drupal\Core\Controller\ControllerBase;

use Drupal\Core\Link;
use Drupal\Core\Url;

class PalindromeController extends ControllerBase
{

 

    public function result($name)
    {
        if ($name !== strrev($name)) {
            return ['#markup' => $this->t("@name is not a palindrome", ['@name' => $name])];
        } else {
        return ['#markup' => $this->t("@name is a palindrome", ['@name' => $name])];
    }
}
}