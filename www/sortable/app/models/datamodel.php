<?php

namespace App\Models;

use App\Core\Model;
use Exception;


/**
 * Data Model:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class DataModel extends Model
{
    public function get($field, $operator, $string, $order = "ASC", $page = 1, $limit = 5)
    {
        if ($operator == "LIKE") {
            $string = "%" . $string . "%";
        }
        if ($field == null OR $operator == null OR $string == null) {
            $data = $this->Db->table('sortable')
                ->orderBy('id', $order)
                ->paginate($page, $limit);
        } else {
            $data = $this->Db->table('sortable')
                ->where($field, $operator, $string)
                ->orderBy('id', $order)
                ->paginate($page, $limit);
        }
        $meta = $this->Db->paginationInfo();
        $result = [
            "data" => $data,
            "meta" => $meta
        ];
        return $result;
    }

}

