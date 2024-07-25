<?php

namespace App\Defaults;

use App\Models\Asset;
use App\Models\GeneralSetting;
use App\Models\UserAsset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Regular
{
    private function uniqueCode($length=10)
    {
        $id = Str::random($length);
        return $id;
    }

    public function generateId($table,$column,$length=10): string
    {
        $id = $this->uniqueCode($length);
        $query = DB::table($table)->select($column)->where($column,$id)->first();
        return (empty($query)) ? $id : $this->generateId($table,$column,$length);
    }

    public function codeExpiration()
    {
        $web = GeneralSetting::where('id',1)->first();
        $codeExpiration = $web->codeExpiration;
        return $codeExpiration;
    }

    //generate user wallet
    public function generateUserWallet($user)
    {
        $coins = Asset::where('status',1)->get();
        if ($coins->count()>0){
            foreach ($coins as $coin) {
                //check if the user has the wallet generated
                $wallet=UserAsset::where([
                    'asset'=>$coin->code,
                    'user'=>$user->id
                ])->first();
                if (empty($wallet)){
                    UserAsset::create([
                       'user'=>$user->id,'asset'=>$coin->code,'balance'=>0
                    ]);
                }
            }
        }
    }

}
