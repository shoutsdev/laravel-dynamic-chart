<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 - shouts.dev</title>
</head>

<body>
<h1>ChartJS Chart Example - shouts.dev</h1>
<canvas id="myChart" height="100px"></canvas>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

    var labels =  {{ $year }};
    var users =  {{ $user  }};

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>
</html>
