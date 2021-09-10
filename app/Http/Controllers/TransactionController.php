<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transaction;
use App\Http\Controllers\TransactionController;


class TransactionController extends Controller
{
    public  function getTransaction()
    {
        return response()->json(Transaction::all(),200);
    }
    
    public static function createTransaction(Request $request)
    {
        $transaction = Transaction::create($request->all());
        return response()->json($record,201);
    }
}
