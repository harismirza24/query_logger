@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? __('Show') . " " . __('Order') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Customer Name:</strong>
                                    {{ $order->customer_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Business Partner Name:</strong>
                                    {{ $order->business_partner_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Product Name:</strong>
                                    {{ $order->product_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Product Number:</strong>
                                    {{ $order->product_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total Amount:</strong>
                                    {{ $order->total_amount }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $order->status }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
