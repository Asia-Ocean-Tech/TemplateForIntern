@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Welcome back Darren!
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    Unfulfilled Orders
                                </div>
                                <div class="card-body">
                                    10 Orders
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    Today Total Earnings
                                </div>
                                <div class="card-body">
                                    RM 817.00
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    Last Sale
                                </div>
                                <div class="card-body">
                                    RM1,200.00
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    Running Low Products
                                </div>
                                <div class="card-body">
                                    0 Product
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
