<?php

namespace App\Console\Commands;

use App\Models\Asset;
use App\Models\Coin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchCryptoRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:cryptoRate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches crypto rate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $coins = Asset::where('status',1)->get();
        if ($coins->count()>0){
            foreach ($coins as $coin) {
                //fetch the rate
                $response = Http::withHeaders([
                    'x-api-key'=>config('app.apiKey')
                ])->get('https://api.tatum.io/v3/tatum/rate/'.$coin->code.'?basePair=USD');

                if ($response->ok()){
                    $res = $response->json();

                    $coin->usdRate = $res['value'];
                    $coin->save();
                }
            }
        }
    }
}
