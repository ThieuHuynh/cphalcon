<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

/**
 * Class MicroController
 */
class MicroController extends Controller
{
    public function indexAction()
    {
    }

    public function otherAction()
    {
    }

    public function anotherAction()
    {
        return 100;
    }

    public function anotherTwoAction($a, $b)
    {
        return $a + $b;
    }

    public function anotherThreeAction()
    {
        $this->dispatcher->forward(
            [
                'controller' => 'micro',
                'action'     => 'anotherfour'
            ]
        );

        return;
    }

    public function anotherFourAction()
    {
        return 120;
    }

    public function anotherFiveAction()
    {
        return $this->dispatcher->getParam('param1') + $this->dispatcher->getParam('param2');
    }
    
    public function returnResponseAction()
    {
        $response = new Response();
        $response->setContent("test");
        return $response;
    }
}
