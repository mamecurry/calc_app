<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello()
    {
        return view('message.hello');
    }
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
                    return response()->json(['error' => 'Division by zero is not allowed.'], 400);
                }
                $result = $value1 / $value2;
                break;
            default:
                return response()->json(['error' => 'Invalid operator.'], 400);
        }

        return view('message.result', ['result' => $result]);
    }
    }

