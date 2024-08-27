@extends('user.base')
@section('content')
    @inject('injected','App\Defaults\Custom')

    @foreach($promos as $promo)
        <div class="ui-kit-card mb-24">
            <h3>{{$promo->title}}</h3>
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">{{$promo->title}}</h4>
                {!! $promo->content !!}
                <div class="mt-3">
                    <a href="{{route('user.enrollPromo',['id'=>$promo->id])}}" class="btn btn-primary">Enroll</a>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row g-6">
        <!-- Card Border Shadow -->
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-primary"
                          ><i class="ti ti-truck ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($injected->userDailyEarning($user->id),2)}}</h4>
                    </div>
                    <p class="mb-1">Today's Earning</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-warning"
                          ><i class="ti ti-alert-triangle ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->balance,2)}}</h4>
                    </div>
                    <p class="mb-1">Account Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->profit,2)}}</h4>
                    </div>
                    <p class="mb-1">Profit Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->bonus,2)}}</h4>
                    </div>
                    <p class="mb-1">Bonus Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->refBal,2)}}</h4>
                    </div>
                    <p class="mb-1">Referral Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($totalDeposits,2)}}</h4>
                    </div>
                    <p class="mb-1">Total Deposit</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->withdrawals,2)}}</h4>
                    </div>
                    <p class="mb-1">Total Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0"> {{number_format($ongoingInvestments->count(),2)}}</h4>
                    </div>
                    <p class="mb-1">Ongoing Investments</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">{{number_format($completedInvestments->count(),2)}}</h4>
                    </div>
                    <p class="mb-1">Completed Investments</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">{{number_format($pendingDeposit->count(),2)}}</h4>
                    </div>
                    <p class="mb-1">Pending  Deposits</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">{{number_format($pendingWithdrawal->count(),2)}}</h4>
                    </div>
                    <p class="mb-1">Pending Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">{{number_format($withdrawals->count(),2)}}</h4>
                    </div>
                    <p class="mb-1">Completed Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>

    </div>


@endsection
