  <!-- Main content -->
  <section class="content">
    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">Dashboard</a></li>
        <li><a data-toggle="tab" href="#sectionB">Background</a></li>
        <li><a data-toggle="tab" href="#sectionB">Timeline</a></li>
        <li><a data-toggle="tab" href="#sectionB">Program</a></li>
        <li><a data-toggle="tab" href="#sectionB">Startup</a></li>
        <li><a data-toggle="tab" href="#sectionB">Startup Founder</a></li>
        <li><a data-toggle="tab" href="#sectionB">User List</a></li>
        <li><a data-toggle="tab" href="#sectionB">User Add</a></li>
        <li><a data-toggle="tab" href="#sectionB">News</a></li>
        <li><a data-toggle="tab" href="#sectionB">News Tag</a></li>
        <li><a data-toggle="tab" href="#sectionB">Mentor</a></li>
        <li><a data-toggle="tab" href="#sectionB">Staff</a></li>
        <li><a data-toggle="tab" href="#sectionB">Partner</a></li>
      
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
      <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <p class="text-center">
                    <strong>
                            7 days visitors
                            <br>
                            <?php 
                              $daysAgo = date("l, j F Y", strtotime("-6 day")); 
                              // $daysAgo = date("j", strtotime("-5 day")); 
                              // $today = date("j F Y");
                              $today = "Today";
                              echo $daysAgo." - ".$today;

                            ?>
                    </strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="lineChart" style="max-width: 500px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <div class="col-md-6">
                  <!-- table -->
                  <p class="text-center">
                    <strong>Most Visited Page (30 days)</strong>
                  </p>
                  <p class="">
                    Top page : 
                    <?php echo @$maxvisit['dimension'][0]; ?>
                    <br>
                    visitor : 
                    <?php echo @$maxvisit['metric'][0]; ?>
                  </p>
                  <!-- pie -->
                   <canvas id="pieChart"></canvas>


                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>

            <br>
            <br>

            <!-- Chart Bawah -->
            <div>
              <p class="text-center">
                    <strong>Top 8 Most Visited Page</strong>
              </p>
            </div>

            </div>
            <br>
            <div class="row">

              <div class="col-md-3">
                <canvas id="barChart1"></canvas>

              </div>
              <div class="col-md-3">
                <canvas id="barChart2"></canvas>

              </div>
              <div class="col-md-3">
                <canvas id="barChart3"></canvas>

              </div>
              <div class="col-md-3">
                <canvas id="barChart4"></canvas>

              </div>


            </div>
            <br>
            <div class="row">

              <div class="col-md-3">
                <canvas id="barChart5"></canvas>
              </div>
              <div class="col-md-3">
                <canvas id="barChart6"></canvas>

              </div>
              <div class="col-md-3">
                <canvas id="barChart7"></canvas>

              </div>
              <div class="col-md-3">
                <canvas id="barChart8"></canvas>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        
    </div>
</div>



      <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script></script>
      <script src="<?php echo base_url('assets/sendiri.js')?>"> </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- Chart   -->

      <script src="<?php echo base_url('assets/dist/js/mdb.js')?>"></script>
      <script>


//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($date['dimension']); ?>,
    datasets: [
    {
      label: "Visitor",
      fillColor: "rgba(220,220,220,0.2)",
      strokeColor: "rgba(220,220,220,1)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(220,220,220,1)",
      data : <?php echo json_encode($date['metric']); ?>

    }
    ]
  },
  options: {
    responsive: true
  }
});
</script>

<script>
  //pie
  var ctxB = document.getElementById("pieChart").getContext('2d');
  var mypieChart = new Chart(ctxB, {
    type: 'pie',
    data: {
      
      labels: <?php echo json_encode($path['dimension']); ?>,
      datasets: [{
        label: 'Trending Page',
        data : <?php echo json_encode($path['metric']); ?>,
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
  });
</script>

<?php for ($i=0; $i <8 ; $i++) { ?>
<script>
  //bar
  var ctxB = document.getElementById("barChart<?php echo $i+1; ?>").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'line',
    data: {
      labels: <?php echo json_encode($page[$i]['dimension']); ?>,
      datasets: [{
        label: '<?php echo $top8page['dimension'][$i] ;?>',
        data: <?php echo json_encode($page[$i]['metric']); ?>,
        backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
<?php } ?>


</body>
</html>