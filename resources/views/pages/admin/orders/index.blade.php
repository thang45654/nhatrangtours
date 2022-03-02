@extends('layouts.app')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                @include('partials.orders.view', ['total_tours' => $total_tours,
                                                  'total_partners' => $total_partners,
                                                  'total_tickets' => $total_tickets,
                                                  'total_revenue' => $total_revenue,
                                                  'orders' => $orders])
            </div>
        </div>
    </div>

@endsection
