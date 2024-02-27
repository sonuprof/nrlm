<aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  <script>
    (function destroy() {
      document.getElementById('sidebar-overlay').remove();
    })();
  </script>
  <script>
    var options = {
      series: [{
        data: [44, 55, 41, 64, 22, 43, 21]
      }, {
        data: [53, 32, 33, 52, 13, 44, 32]
      }],
      chart: {
        type: 'bar',
        height: 430
      },
      plotOptions: {
        bar: {
          horizontal: false,
          dataLabels: {
            position: 'top',
          },
          barWidth: '10px',
        }
      },
      colors: ['#1E90FF', '#032174'],
      dataLabels: {
        enabled: true,
        offsetX: 0,
        offsetY: -15,
        style: {
          fontSize: '12px',
          colors: ['#000000']
        }
      },
      stroke: {
        show: true,
        width: 1,
        colors: ['#fff']
      },
      tooltip: {
        shared: true,
        intersect: false
      },
      xaxis: {
        categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
      },
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>

  <script>
    var options = {
      series: [44, 55, 13, 43, 22],
      chart: {
        toolbar: {
          show: true,
          tools: {
            download: true,
          },
        },
        width: '100%',
        height: '450px',
        type: 'donut',
      },
      dataLabels: {
        enabled: true,
      },
      fill: {
        type: 'solid',
      },
      legend: {
        position: 'bottom'
      },
      labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
      colors: ['#000080', '#032174', '#1E90FF', '#023E88', '#013A63'],
      responsive: [{
        breakpoint: 450,
        options: {
          chart: {
            width: '80%'
          },
        }
      }]
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();

    let bar = document.getElementById('bar').clientHeight;
    bar = parseFloat(bar).toFixed(2);
    console.log(bar);
    document.getElementById('pie').setAttribute("style", `height:${470}px`);
  </script>

</body>

</html>