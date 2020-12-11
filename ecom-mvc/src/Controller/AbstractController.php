<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 2:38 AM
 */

namespace Controller;

use Core\Template;

class AbstractController
{
    private $template;

    public function __construct()
    {
        $this->template = new Template();
    }

    protected function getView($controller, array $variables = [])
    {
        return $this->template->getView($controller, $variables);
    }
}