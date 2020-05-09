<?php

namespace App\Controllers;

use App\Core\Controller;

/**
 * Mainpage Controller:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Index extends Controller
{

    private $direction;
    private $field;

    /**
     * Index: Renders the mainpage view.
     * @access public
     * @return void
     * @example /index
     */
    function index()
    {
        $this->view->render("index", [
            "title" => APP_NAME,
        ]);
    }
}

?>