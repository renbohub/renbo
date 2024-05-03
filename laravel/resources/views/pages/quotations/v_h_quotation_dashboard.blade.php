@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">This Year</span>
                    <h5>Quotation Valued</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins" id="total_quot"></h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total Quoatation</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-info float-right">Annual</span>
                    <h5>Sales Order</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins" id="total_order">0</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary float-right"></span>
                    <h5>Invoice Value</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">106,120</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                    <small>New visits</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    
                    <h5>Receipment Value</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">80,600</h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                    <small>In first month</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Sales Value Graphic</h5>
                    <div class="float-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-white active">Today</button>
                            <button type="button" class="btn btn-xs btn-white">Monthly</button>
                            <button type="button" class="btn btn-xs btn-white">Annual</button>
                        </div>
                    </div>
                </div>
                <div class="ibox-content" style="height: 400px!important">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="chart" width="100%"></div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <ul class="stat-list">
                                <li>
                                    <h2 class="no-margins">2,346</h2>
                                    <small>Total orders in period</small>
                                    <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="no-margins ">4,422</h2>
                                    <small>Orders in last month</small>
                                    <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                    <div class="progress progress-mini">
                                        <div style="width: 60%;" class="progress-bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="no-margins ">9,180</h2>
                                    <small>Monthly income from orders</small>
                                    <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    var options = {
        series: [],
        chart: {
          height: 350,
          type: 'line',
        },
        stroke: {
          width: [0, 4]
        },
        title: {
          text: 'Sales Dashboard'
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [1]
        },
        
        xaxis: {
          type: 'date'
        },
        yaxis: {
          title: {
            text: 'Project Value',
          },
        
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    var total_q = 0
    var total_o = 0
    var data = @json($data);
    for (let i = 0; i < data.length; i++) {
        total_q += parseFloat(data[i].total_price);
        if(data[i].quotation_status>3){
            total_o += parseFloat(data[i].total_price);
        }
        
    }
    t_q = addCommas(total_q.toFixed(0));
    t_o = addCommas(total_o.toFixed(0));
    $('#total_quot').html('Rp. '+t_q+',-')
    $('#total_order').html('Rp. '+t_o+',-')
function addCommas(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>
@endsection