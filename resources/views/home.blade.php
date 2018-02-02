@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" media="screen">
@endpush

@section('content')
    <div class="container-fluid slider-wrapper">
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators align-content-end">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mt-80 d-flex align-items-center flex-wrap">
                            <div class="col-lg-5">
                                <h1><strong>Buy and Sell</strong></h1>
                                <h1><strong>Cryptocurrencies</strong></h1>
                                <h6 class="text-muted mt-4 lower-text">We are the easiest and most secure way to</h6>
                                <h6 class="text-muted lower-text">buy and sell Cryptocurrencies</h6>
                            </div>
                            <div class="col-lg-7 slider-image center-content">
                                <img src="images/mobile-hero.png" alt="Second slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt-80 d-flex align-items-center flex-wrap">
                            <div class="col-lg-5">
                                <h1><strong>Buy and Sell</strong></h1>
                                <h1><strong>Cryptocurrencies</strong></h1>
                                <h6 class="text-muted mt-4 lower-text">We are the easiest and most secure way to</h6>
                                <h6 class="text-muted lower-text">buy and sell Cryptocurrencies</h6>
                            </div>
                            <div class="col-lg-7 slider-image center-content">
                                <img src="images/mobile-hero.png" alt="Second slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt-80 d-flex align-items-center flex-wrap">
                            <div class="col-lg-5">
                                <h1><strong>Buy and Sell</strong></h1>
                                <h1><strong>Cryptocurrencies</strong></h1>
                                <h6 class="text-muted mt-4 lower-text">We are the easiest and most secure way to</h6>
                                <h6 class="text-muted lower-text">buy and sell Cryptocurrencies</h6>
                            </div>
                            <div class="col-lg-7 slider-image center-content">
                                <img src="images/mobile-hero.png" alt="Second slide">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr style="margin-top: 0 !important;">
    </div>

    <div class="mt-50 mb-20">
        <h5 class="text-center text-muted">Cryptocurrency</h5>
        <h6 class="text-center text-muted">Real-time Price Calculator</h6>
    </div>
    <div class="col-md-10 mx-auto">
        <div class="row">
            <div class="col-md-2 bg-white">
                <select class="form-control selectpicker br-0 shadow">
                    <option class="text-md">BUY</option>
                </select>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control selectpicker br-0 shadow text-md bg-white">
                            <option>BITCOIN</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3 full-width shadow">
                            <input type="text" class="form-control text-md" placeholder="Amount" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text simplebox bg-white" id="basic-addon2">BTC</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group shadow">
                            <span class="form-control bg-white simplebox text-md">6,238,177.08</span>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle simplebox" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NGN</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-custom btn-block text-uppercase simplebox">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 col-md-10 ">
        <div class="row mx-auto table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr class="p-10">
                    <th class="shadow-lite"><strong>Active Sellers</strong></th>
                    <th class="shadow-lite"><strong>Active Buyers</strong></th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-well">
                    <td>
                        <table class="table table-sm bg-well table-sellers">
                            <thead>
                            <tr>
                                <th class="text-muted">USERNAME</th>
                                <th class="text-muted">PRICE/BTC</th>
                                <th class="text-muted"></th>
                            </tr>
                            </thead>
                            <tbody class="p-10">
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">BUY</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">BUY</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">BUY</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">BUY</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table table-sm bg-well table-buyers">
                            <thead>
                            <tr>
                                <th class="text-muted">USERNAME</th>
                                <th class="text-muted">PRICE/BTC</th>
                                <th class="text-muted"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow br-1">SELL</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">SELL</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">SELL</button>
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td>@ebotalaya</td>
                                <td>8,000,000 NGN</td>
                                <td>
                                    <button class="btn btn-light btn-sm shadow">SELL</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
