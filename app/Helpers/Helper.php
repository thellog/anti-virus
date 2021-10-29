<?php

namespace App\Helpers;

class Helper
{
    public static function category($categories, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($categories as $key => $category) {
            if ($category->parent_id == $parent_id) {
                $html .= '
                  <tr>
                    <td> '. $category->id .' </td>
                    <td> '. $char . $category->name .' </td>
                    <td> '. $category->description .' </td>
                    <td> '. $category->updated_at .' </td>
                    <td> &nbsp; </td>
                  </tr>';

                unset($categories[$key]);

                $html .= self::category($categories, $category->id, $char . "-> ");
            }
        }
        return $html;
    }
}
