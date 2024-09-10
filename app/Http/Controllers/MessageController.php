<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function result($value1, $operator, $value2,)
    {
        
        switch ($operator) {
            case 'addition':
                $result = $value1 + $value2;
                break;
            case 'subtraction':
                $result = $value1 - $value2;
                break;
            case 'multiplication':
                $result = $value1 * $value2;
                break;
            case 'division':
                if ($value2 == 0) {
                $result = '計算できません';break;
}
                $result = $value1 / $value2;
break;
        }

        return view('message.result', ['result' => $result]);
    }
    }
