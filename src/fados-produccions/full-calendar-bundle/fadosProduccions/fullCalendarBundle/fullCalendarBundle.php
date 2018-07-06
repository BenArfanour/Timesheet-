<?php
/**
 * Created by PhpStorm.
 * User: Albert
 * Date: 23/2/2016
 * Time: 8:58
 */

namespace fadosProduccions\fullCalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class fullCalendarBundle extends Bundle
{
    public function getParent()
    {
        return 'fados-produccions';
    }

}