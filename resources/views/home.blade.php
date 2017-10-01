@extends('layouts.dashboard')

@section('content')
<?php  ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Number of individual visitors: <span> <b>{{ $visit[0]['visitors'] }}</b> </span></h4>
                        <h4 class="title">Number of total views: <span> <b>{{ $visit[0]['pageViews'] }}</b> </span></h4>
                        <p class="category">Data provided by Google Analytics</p>
                    </div>
                    <div class="content">
                
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Number of visits by platform/device</h4>
                        <p class="category">Data provided by Google Analytics</p>
                    </div>
                    <div class="content">
                        <div id="chartContainer" class="ct-chart"></div>

                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Number of visits by refers</h4>
                        <p class="category">Data provided by Google Analytics</p>
                    </div>
                    <div class="content">
                        <div id="chartContainer2" class="ct-chart"></div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Visits by Platform/device (7 days range)"
            },
            data: [
                {
                    type: "column",
                    dataPoints: [
                        // { label: "apple", y:10 },
                        // { label: "orange", y:14 },
                        // { label: "mango", y:22 },
                        // { label: "grape", y:4 },

                        <?php
                        foreach ( $device as $rows )
                        {
                            echo "{label:'{$rows['browser']}', y:{$rows['sessions']}}, \r\n";
                        }
                        ?>
                    ]

                }
            ]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            title: {
                text: "Visits by refers (7 days range)"
            },
            data: [
                {
                    type: "column",
                    dataPoints: [
                        // { label: "apple", y:10 },
                        // { label: "orange", y:14 },
                        // { label: "mango", y:22 },
                        // { label: "grape", y:4 },

                        <?php
                        foreach ( $refer as $rows )
                        {
                            echo "{label:'{$rows['url']}', y:{$rows['pageViews']}}, \r\n";
                        }
                        ?>
                    ]

                }
            ]
        });
        chart2.render();

    }
</script>
@endsection
