@extends('user.base')
@section('content')
    @inject('option','App\Defaults\Custom')

<div class="ui-kit-cards">
    <p>Earn even more when you swap your Account balance to and from crypto.</p>
    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="p-3 card bg- shadow">
                <div class="d-flex align-items-center">
                    <span class="mr-3 bg-transparent stamp stamp-md">

                    </span>
                    <div>
                        <p class="mb-1 text-">
                            <b>${{number_format($user->accountBalance,2)}}</b>
                        </p>
                        <small class="text-muted">Account Balance</small>
                    </div>
                </div>
            </div>
        </div>
        @foreach($balances as $balance)
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="single-today-card d-flex align-items-center shadow">
                    <div class="flex-grow-1">
                        <span class="today">
                            {{$option->fetchAssetFromCode($balance->asset)->asset}}
                        </span>
                        <h6 class="text-muted">{{number_format($balance->balance,5)}} {{$option->fetchAssetFromCode($balance->asset)->asset}}</h6>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <img src="{{asset('cryptocoins/'.strtolower($option->fetchAssetFromCode($balance->asset)->asset)).'.svg'}}"
                             style="width: 20px;"/>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="tradingview-widget-container">
                <div id="tradingview_f933e"></div>
                <div class="tradingview-widget-copyright">
                    <a href="#" rel="noopener" target="_blank"><span class="blue-text"></span>
                        <span class="blue-text">Personal trading chart</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="javascript:void(0)" id="exchnageform">
                        @csrf
                        <div class="form-group">
                            <p class="text-">Source Account</p>
                            <select class="form-control text- bg-" name="source" id="sourceasset">
                                @foreach($balances as $asset)
                                    <option value="{{$asset->$asset}}">{{$option->fetchAssetFromCode($asset->asset)->asset}}</option>
                                @endforeach
                                <option value="usd">USD</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p class="text-">Destination Account</p>
                            <select name="destination"
                                    class="form-control text- bg-"
                                    id="destinationasset">
                                <option value="usd">USD</option>
                                @foreach($balances as $asset)
                                    <option value="{{$asset->$asset}}">{{$option->fetchAssetFromCode($asset->asset)->asset}}</option>
                                @endforeach
                            </select>
                            <small class="text-">NOTE:USD is your account balance.</small>
                        </div>

                        <div class="form-group">
                            <p class="text-">Amount</p>
                            <input type="text" name="amount"
                                   class="form-control text- bg-"
                                   placeholder="Enter amount of btc" id="amount">
                        </div>
                        <div class="form-group">
                            <p class="text-">You will get</p>
                            <input type="text"
                                   class="form-control text- bg-"
                                   placeholder="Quantity of usd" id="quantity" readonly </div>
                        <input type="hidden" id="realquantity" name="quantity">
                        <div class="form-group">
                                            <span class="mb-1 ml-2 caption">
                                                <span class="text-"><b>Fees =
                                                        2%</b></span>
                                            </span>
                        </div>

                        <div class="cta inline-group text-center">
                            <button class="btn btn-success btn-block btn-sm">
                                Swap
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @push('js')
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget({
                "width": "100%",
                "height": "400",
                "symbol": "COINBASE:BTCUSD",
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": '',
                "style": "9",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "hide_side_toolbar": false,
                "allow_symbol_change": true,
                "calendar": false,
                "studies": [
                    "BB@tv-basicstudies"
                ],
                "container_id": "tradingview_f933e"
            });
        </script>

        <script>
            let destinationasset = document.getElementById('destinationasset');
            let sourceasset = document.getElementById('sourceasset');
            let amount = document.getElementById('amount');
            let quatity = document.getElementById('quantity');
            // console.log(destinationasset);

            destinationasset.addEventListener('change', validate);
            sourceasset.addEventListener('change', validate);
            if (destinationasset.value == sourceasset.value) {
                alert('Source and Destination account cannot be the same')

                destinationasset.value = '';
                amount.placeholder = '';
                quatity.placeholder = '';
                amount.value = '';
                quatity.value = '';
            } else {
                amount.placeholder = `Enter amount of ${sourceasset.value}`;
                quatity.placeholder = `Quantity of ${destinationasset.value}`;

            }

            function validate() {
                amount.value = '';
                quatity.value = '';
                if (destinationasset.value == sourceasset.value) {
                    alert('Source and Destination account cannot be the same')

                    destinationasset.value = '';
                    amount.placeholder = '';
                    quatity.placeholder = '';
                    amount.value = '';
                    quatity.value = '';
                } else {
                    amount.placeholder = `Enter amount of ${sourceasset.value}`;
                    quatity.placeholder = `Quantity of ${destinationasset.value}`;

                }
            }
        </script>
    @endpush
@endsection
