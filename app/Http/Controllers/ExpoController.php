<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpoController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function list(Request $request)
    {
        echo "test";exit;
        $validatedData = $request->validate([
            'expo_name' => 'required',
            'name' => 'required',
            'company_name' => 'required',
        ]);
        /*print_r($validatedData);exit;

        if ($request->isMethod('post')) {

        }*/
        //echo "test";
    }
}
