<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\DataModel;
use App\Utility\Input;

/**
 * API Controller:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Api extends Controller
{

    private $direction;
    private $field;

    /**
     * Index
     * @access public
     * @return void
     * @example api/index
     */
    function index()
    {
        echo "Specify method...";
    }

    /**
     * get
     * @access public
     * @return void
     * @example api/get
     */
    function get()
    {
        $datamodel = new DataModel();
        switch (Input::get("op")){
            case "equally":
                $op = "=";
                break;
            case "contains":
                $op = "LIKE";
                break;
            case "more":
                $op = ">";
                break;
            case "less":
                $op = "<";
                break;
        }

        if (empty(Input::get("page"))){
            $page = 1;
        } else $page = Input::get("page");

        $data = $datamodel->get(Input::get("field"), $op, Input::get("str"), Input::get("order"),$page);
        $this->writeJSON($data);
    }
}

?>