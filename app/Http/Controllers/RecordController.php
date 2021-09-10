<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Record;
use App\Http\Controllers\RecordController;

class RecordController extends Controller
{
    public  function getRecord()
    {
        return response()->json(Record::all(),200);
    }
    
    public static function createRecord(Request $request)
    {
        $record = Record::create($request->all());
        return response()->json($record,201);
    }
}
