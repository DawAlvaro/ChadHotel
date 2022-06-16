@extends('template.master')
@section('title', 'Dashboard')
@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('style/css/admin.css') }}"> --}}
@endsection
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
                                        <!-- Por cada transaccion muestra el usuario con los datos -->
                                        @forelse ($transactions as $transaction)
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <!-- Nombre del huesped -->
                                                    {{ $transaction->user->name }}
                                                </td>
                                                <td>
                                                    <!-- Numero de la habitación -->
                                                    {{ $transaction->room->number }}
                                                </td>
                                                <td>
                                                    <!-- Dias que estará hospedado -->
                                                    {{ Helper::dateFormat($transaction->check_in) }} ~
                                                    {{ Helper::dateFormat($transaction->check_out) }}
                                                </td>
                                                <!-- Dias que le quedan en el hotel, si es su ultimo dia aparecerá last day -->
                                                <td>{{ Helper::getDateDifference(now(), $transaction->check_out) == 0 ? 'Last Day' :  Helper::getDateDifference(now(), $transaction->check_out). ' '. Helper::plural('Day', Helper::getDateDifference(now(), $transaction->check_out))}}
                                                </td>
                                                <!-- Precio total a pagar -->
                                                <td>
                                                    {{ $transaction->getTotalPrice() }}€
                                                </td>
                                                
                                            </tr>
                                            <!-- En caso de que no haya ningun huesped se indica con un mensaje en la tabla -->
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
                                    <h3 class="card-title">Monthly Guests Chart</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="d-flex flex-column">
                                        {{-- <span class="text-bold text-lg">Belum</span> --}}
                                        {{-- <span>Total Guests at {{ Helper::thisMonth() . '/' . Helper::thisYear() }}</span> --}}
                                    </p>
                                    {{-- <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> Belum
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p> --}}
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

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> --}}
    {{-- <canvas id="pieChart"></canvas> --}}
@endsection
@section('footer')
<script src="{{ asset('style/js/jquery.js') }}"></script>
<script src="{{ asset('style/js/chart.min.js') }}"></script>
<script src="{{ asset('style/js/guestsChart.js') }}"></script>
<script>
    function reloadJs(src) {
        src = $('script[src$="' + src + '"]').attr("src");
        $('script[src$="' + src + '"]').remove();
        $('<script/>').attr('src', src).appendTo('head');
    }

    Echo.channel('dashboard')
        .listen('.dashboard.event', (e) => {
            $("#dashboard").hide()
            $("#dashboard").load(window.location.href + " #dashboard");
            $("#dashboard").show(150)
            reloadJs('style/js/guestsChart.js');
            toastr.warning(e.message, "Hello, {{auth()->user()->name}}");
        })

</script>
@endsection
