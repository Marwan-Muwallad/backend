<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Accounts;
use App\Http\Controllers\AccountController;

class AccountController extends Controller
{
    public  function getAccount()
    {
        return response()->json(Accounts::all(),200);
    }
    
    public static function addAccount(Request $request)
    {
        $accounts = Accounts::create($request->all());
        return response()->json($accounts,201);
    }
    public static function updateAccount(Request $request,$id)
    {
        $accounts = Accounts::find($id);
        if(is_null($accounts)) {
            return response()->json(['massage' =>  'Account Not Found'],404);
        }
        $accounts->update($request->all());
        return response()->json($accounts,200);
    }
    public static function deleteAccount(Request $request,$id)
    {
        $accounts = Accounts::find($id);
        if(is_null($accounts)) {
            return response()->json(['massage' =>  'Account Not Found'],404);
        }
        $accounts->delete();
        return response()->json(null,204);
    }
}
