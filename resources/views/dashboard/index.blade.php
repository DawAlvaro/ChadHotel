@extends('template.master')
@section('title', 'Dashboard')
@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('style/css/admin.css') }}"> --}}
@endsection
@if (auth()->user()->role == 'Super' || auth()->user()->role == 'Admin')
@section('content')
    <div id="dashboard">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="card shadow-sm border">
                            <div class="card-header">
                                <div class="row ">
                                    <!-- Cuenta el numero de personas hospedadas hoy  -->
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <h3>Today Guests: {{ count($transactions) }}</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabla para mostrar los clientes con reserva -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Room</th>
                                            <th>Stay</th>
                                            <th>Day Left</th>
                                            <th>Debt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- For each transaction show the user's data -->

                                        @forelse ($transactions as $transaction)
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <!-- Guest Name -->
                                                    {{ $transaction->user->name }}
                                                </td>
                                                <td>
                                                    <!-- Room number -->
                                                    {{ $transaction->room->number }}
                                                </td>
                                                <td>
                                                    <!-- Days stayed -->
                                                    {{ Helper::dateFormat($transaction->check_in) }} ~
                                                    {{ Helper::dateFormat($transaction->check_out) }}
                                                </td>
                                                <!-- Days left in the hotel -->
                                                <td>{{ Helper::getDateDifference(now(), $transaction->check_out) == 0 ? 'Last Day' :  Helper::getDateDifference(now(), $transaction->check_out). ' '. Helper::plural('Day', Helper::getDateDifference(now(), $transaction->check_out))}}
                                                </td>
                                                <!-- Total price to pay -->
                                                <td>
                                                    {{ $transaction->getTotalPrice() }}€
                                                </td>
                                                
                                            </tr>
                                            <!-- In case that we have no guests yet -->
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">
                                                    There's no data in this table
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-lg-6">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="card shadow-sm border">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Details</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="d-flex flex-column">
                                    </p>
                                </div>
                                <div class="position-relative mb-4">
                                    <canvas this-year="{{ Helper::thisYear() }}"
                                        this-month="{{ Helper::thisMonth() }}" id="visitors-chart" height="400"
                                        width="100%" class="chartjs-render-monitor"
                                        style="display: block; width: 249px; height: 200px;"></canvas>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> {{ Helper::thisMonth() }}
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif
@if (auth()->user()->role == 'Customer')
@section('content')
    <div class="row mt-2 mb-2">
        <div class="col-lg-4 mb-2">
            <form class="d-flex" method="GET" action="{{ route('transaction.reservation.pickFromCustomer') }}">
                <button class="btn btn-outline-dark" type="submit">Nueva reserva</button>
            </form>
        </div>
    </div>
@endsection
@endif
@section('footer')
<script src="{{ asset('style/js/jquery.js') }}"></script>
<script src="{{ asset('style/js/chart.min.js') }}"></script>
<script src="{{ asset('style/js/guestsChart.js') }}"></script>
@endsection
