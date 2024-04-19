@include('component.header')
@include('component.sidebar')

<style>
  #container {
    height: 100%;
    width: 100%;
    border: 2px solid black;
    border-radius: 10px;

  }

  .loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
  }

  #clicks {
    position: absolute;
    background-color: gold;
    box-shadow: 4px 4px 4px rgb(125, 228, 77), inset -4px -4px 4px rgb(125, 228, 77);
    width: auto;
    color: black;
    display: none;
    padding: 5px 20px;
    text-align: center;
    border-radius: 10px;
  }

  #tle {
    font-weight: bold;
    padding-bottom: 2px;
    padding-top: 10px;
    border-bottom: 2px solid black;
  }
</style>



<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0" style="font-weight: bold;">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12" style="position: relative; min-height: 100vh;padding-bottom: 10px;  ">
          <div id="container"></div>
          <div id="clicks"></div>
        </div>
      </div>
    </div>
  </section>


</div>



</div>



<!-- <script>
    (async () => {
      const topology = await fetch(
        'https://code.highcharts.com/mapdata/countries/in/in-all.topo.json'
      ).then(response => response.json());

      const data = [
        ['in-py', 4],
        ['in-ld', 1],
        ['in-wb', 23],
        ['in-or', 30],
        ['in-br', 38],
        ['in-sk', 6],
        ['in-ct', 33],
        ['in-tn', 38],
        ['in-mp', 55],
        ['in-2984', 33],
        ['in-ga', 2],
        ['in-nl', 16],
        ['in-mn', 16],
        ['in-ar', 2],
        ['in-mz', 11],
        ['in-tr', 8],
        ['in-3464', 3],
        ['in-dl', 11],
        ['in-hr', 22],
        ['in-ch', 1],
        ['in-hp', 12],
        ['in-jk', 20],
        ['in-kl', 14],
        ['in-ka', 31],
        ['in-dn', 34],
        ['in-mh', 36],
        ['in-as', 35],
        ['in-ap', 26],
        ['in-ml', 12],
        ['in-pb', 23],
        ['in-rj', 50],
        ['in-up', 75],
        ['in-ut', 13],
        ['in-jh', 24],
        ['in-tg', 33],
        ['in-an', 3]
      ];

      // Create the chart
      const chart = Highcharts.mapChart('container', {
        chart: {
          map: topology
        },

        title: {
          text: '',
          enabled: false
        },



        mapNavigation: {
          enabled: true,
          buttonOptions: {
            verticalAlign: 'bottom'
          }
        },

        colorAxis: {
          min: 0
        },

        series: [{
          data: data,
          name: ' PG-PE-FPO',
          states: {
            hover: {
              color: '#BADA55'
            }
          },
          dataLabels: {
            enabled: true,
            format: '{point.name}'
          }
        }]
      });

      if (chart && chart.series && chart.series[0] && chart.series[0].points) {
        chart.series[0].points.forEach(point => {
          if (point) {
            point.graphic && point.graphic.element && point.graphic.element.addEventListener('mouseover', function(event) {
              // console.log(point.name);
              const clicks = document.getElementById('clicks');
              clicks.innerHTML = '';
              const p1 = document.createElement('p');
              const p2 = document.createElement('p');
              const p3 = document.createElement('p');
              const p4 = document.createElement('p');
              p4.textContent = ` ${point.name} `;
              p1.textContent = 'PG-45';
              p2.textContent = 'PE-45';
              p3.textContent = 'FPO-45';
              p4.id = 'tle'
              clicks.appendChild(p4);
              clicks.appendChild(p1);
              clicks.appendChild(p2);
              clicks.appendChild(p3);
              clicks.style.left = event.clientX - 180 + 'px';
              clicks.style.top = event.pageY - 150 + 'px';
              clicks.style.display = 'block';
            });
            point.graphic && point.graphic.element && point.graphic.element.addEventListener('mouseleave', function() {
              const clicks = document.getElementById('clicks');
              clicks.style.display = 'none';

            });


            point.graphic && point.graphic.element && point.graphic.element.addEventListener('click', function() {
             window.location.href = 'detail'
            });

          }
        });
      }

      if (chart && chart.series && chart.series[0] && chart.series[0].points) {
        chart.series[0].points.forEach(point => {
          if (point) {
            point.events = {
              mouseOver: () => {
                chart.setTitle({
                  text: `Population: ${point.value}`
                });
              },
              mouseOut: () => {
                chart.setTitle({
                  text: 'Highcharts Maps basic demo'
                });
              }
            };
          }
        });
      }
    })();
  </script> -->
<!-- <script>
    (async () => {
        const topology = await fetch(
            'https://code.highcharts.com/mapdata/countries/in/in-all.topo.json'
        ).then(response => response.json());

        const data = [
            ['in-py', 4],
            ['in-ld', 1],
            ['in-wb', 23],
            ['in-or', 30],
            ['in-br', 38],
            ['in-sk', 6],
            ['in-ct', 33],
            ['in-tn', 38],
            ['in-mp', 55],
            ['in-2984', 33],
            ['in-ga', 2],
            ['in-nl', 16],
            ['in-mn', 16],
            ['in-ar', 2],
            ['in-mz', 11],
            ['in-tr', 8],
            ['in-3464', 3],
            ['in-dl', 11],
            ['in-hr', 22],
            ['in-ch', 1],
            ['in-hp', 12],
            ['in-jk', 20],
            ['in-kl', 14],
            ['in-ka', 31],
            ['in-dn', 34],
            ['in-mh', 36],
            ['in-as', 35],
            ['in-ap', 26],
            ['in-ml', 12],
            ['in-pb', 23],
            ['in-rj', 50],
            ['in-up', 75],
            ['in-ut', 13],
            ['in-jh', 24],
            ['in-tg', 33],
            ['in-an', 3]
        ];

        // Create the chart
        const chart = Highcharts.mapChart('container', {
            chart: {
                map: topology
            },

            title: {
                text: '',
                enabled: false
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series: [{
                data: data,
                name: ' PG-PE-FPO',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });

        if (chart && chart.series && chart.series[0] && chart.series[0].points) {
            chart.series[0].points.forEach(point => {
                if (point) {
                    point.graphic && point.graphic.element && point.graphic.element.addEventListener('click', function() {
                        console.log('clicked');

                        // Sending point.name to controller function
                        const pointName = point.name;
                        const url = `/save-clicked-state?state=${encodeURIComponent(pointName)}`;
                        fetch(url, {
                            method: 'GET', // Using GET request
                            headers: {
                                'Content-Type': 'application/json'
                            },
                        })
                        .then(response => {
                            // Handle response if needed
                            // Redirect to the detail page
                              window.location.href = 'detail';
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    });
                }
            });
        }

        if (chart && chart.series && chart.series[0] && chart.series[0].points) {
            chart.series[0].points.forEach(point => {
                if (point) {
                    point.events = {
                        mouseOver: () => {
                            chart.setTitle({
                                text: `Population: ${point.value}`
                            });
                        },
                        mouseOut: () => {
                            chart.setTitle({
                                text: 'Highcharts Maps basic demo'
                            });
                        }
                    };
                }
            });
        }
    })();
</script> -->

<script>
  (async () => {
    const topology = await fetch(
      'https://code.highcharts.com/mapdata/countries/in/in-all.topo.json'
    ).then(response => response.json());

    const data = [
      ['in-py', 4],
      ['in-ld', 1],
      ['in-wb', 23],
      ['in-or', 30],
      ['in-br', 38],
      ['in-sk', 6],
      ['in-ct', 33],
      ['in-tn', 38],
      ['in-mp', 55],
      ['in-2984', 33],
      ['in-ga', 2],
      ['in-nl', 16],
      ['in-mn', 16],
      ['in-ar', 2],
      ['in-mz', 11],
      ['in-tr', 8],
      ['in-3464', 3],
      ['in-dl', 11],
      ['in-hr', 22],
      ['in-ch', 1],
      ['in-hp', 12],
      ['in-jk', 20],
      ['in-kl', 14],
      ['in-ka', 31],
      ['in-dn', 34],
      ['in-mh', 36],
      ['in-as', 35],
      ['in-ap', 26],
      ['in-ml', 12],
      ['in-pb', 23],
      ['in-rj', 50],
      ['in-up', 75],
      ['in-ut', 13],
      ['in-jh', 24],
      ['in-tg', 33],
      ['in-an', 3]
    ];

    // Create the chart
    const chart = Highcharts.mapChart('container', {
      chart: {
        map: topology
      },

      title: {
        text: '',
        enabled: false
      },

      mapNavigation: {
        enabled: true,
        buttonOptions: {
          verticalAlign: 'bottom'
        }
      },

      colorAxis: {
        min: 0
      },

      series: [{
        data: data,
        name: ' PG-PE-FPO',
        states: {
          hover: {
            color: '#BADA55'
          }
        },
        dataLabels: {
          enabled: true,
          format: '{point.name}'
        }
      }]
    });

    if (chart && chart.series && chart.series[0] && chart.series[0].points) {
      chart.series[0].points.forEach(point => {
        if (point) {
          point.graphic && point.graphic.element && point.graphic.element.addEventListener('click', function() {
            // console.log('clicked');
            // Sending point.name to controller function
            const pointName = point.name;
            const url = `/save-clicked-state?state=${encodeURIComponent(pointName)}`;
            fetch(url, {
                method: 'GET', // Using GET request
                headers: {
                  'Content-Type': 'application/json'
                },
              })
              .then(response => {
                // Handle response if needed
                // Redirect to the detail page
                window.location.href = 'detail';
              })
              .catch(error => {
                console.error('Error:', error);
              });
          });

          // Add mouseover event listener
          point.graphic && point.graphic.element && point.graphic.element.addEventListener('mouseover', function(event) {
            const clicks = document.getElementById('clicks');
            clicks.innerHTML = '';
            const p1 = document.createElement('p');
            const p2 = document.createElement('p');
            const p3 = document.createElement('p');
            const p4 = document.createElement('p');
            p4.textContent = ` ${point.name} `;
            p1.textContent = `PG-${7}`;
            p2.textContent = `PE-${45}`;
            p3.textContent = `FPO-${45}`;
            p4.id = 'tle'
            clicks.appendChild(p4);
            clicks.appendChild(p1);
            clicks.appendChild(p2);
            clicks.appendChild(p3);
            clicks.style.left = event.clientX - 180 + 'px';
            clicks.style.top = event.pageY - 150 + 'px';
            clicks.style.display = 'block';
          });
        }
      });
    }

    if (chart && chart.series && chart.series[0] && chart.series[0].points) {
      chart.series[0].points.forEach(point => {
        if (point) {
          point.events = {
            mouseOver: () => {
              chart.setTitle({
                text: `Population: ${point.value}`
              });
            },
            mouseOut: () => {
              chart.setTitle({
                text: 'Highcharts Maps basic demo'
              });
            }
          };
        }
      });
    }
  })();
</script>
@include("component.table-footer");