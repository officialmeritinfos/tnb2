<?php

namespace App\Http\Controllers\User;

use App\Defaults\Regular;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Swap;
use App\Models\UserAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SwapController extends Controller
{
    use Regular;
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Swap Crypto',
            'user'     =>  $user,
            'web'       =>$web,
            'swaps'  =>Swap::where('user',$user->id)->paginate(15),
            'balances'=>UserAsset::where('user',$user->id)->get()
        ];

        return view('user.swap',$dataView);
    }
    //process swapping
    public function processSwap(Request  $request)
    {

    }
}
