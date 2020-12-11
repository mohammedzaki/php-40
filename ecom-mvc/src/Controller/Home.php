<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 2:38 AM
 */

namespace Controller;

use Core\Template;

class Home extends AbstractController
{
    public function __construct()
    {
        parent::__construct(new Template());
    }

    public function indexMethod()
    {
        return parent::getView(
            __METHOD__,
            [
                'title' => APP_NAME.' - Home',
                'header' => 'Welcome to '.APP_NAME,
                //'application_name' => APP_NAME,
            ]
        );

    }
}