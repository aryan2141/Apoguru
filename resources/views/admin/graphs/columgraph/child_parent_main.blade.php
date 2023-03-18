@extends('admin.layouts.master')

@section('title')
apoGuru - Graph
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Graphs</h2>
        </div>
        
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Number of child sub Cat & parent sub cat against main categories. </h2>
                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <div id="columnchart_material2" style="width: 800px; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['main cat', 'child' , 'parent'],
        // <?php echo $values ?>,
       
        
          ['main1', 100, 200],
          ['main2', 1170, 460],
          ['main3', 660, 1120],
          ['main4', 1030, 540]
        ]);
      var options = {
        // width: 600,
        // height: 400,
        // legend: { position: 'top', maxLines: 3 },
        // bar: { groupWidth: '75%' },
        // isStacked: true
      };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



@endsection
