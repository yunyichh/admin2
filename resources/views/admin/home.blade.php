<style type="text/css">
    html, body {
        overflow-y: scroll;
    }

    html, body {
        overflow: scroll;
        min-height: 101%;
    }

    html {
        overflow: -moz-scrollbars-vertical;
    }

    .board {
        width: 100%;
        display: flex;
    }

    .board-row {
        width: 33%;
        text-align: center;
        display: block;
    }

    .board-column {
        padding: 2%;
        margin: 1%;
        background: #3D6AD3;
        border: 1px solid black;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: white;
    }

    .myChart {
        padding-top: 50px;
        width: 60%;
        height: 40%;
        margin: 0 auto;
    }
</style>
<div class="board">
    <div class="board-row">
        <div class="board-column">{{ ___('totalRegister') }}:{{ $totalRegister }}</div>
        <div class="board-column">{{ ___('rechargeToday') }}:{{ $rechargeToday }}</div>
        <div class="board-column">{{ ___('activeUserToday') }}:{{ $activeUserToday }}</div>
    </div>
    <div class="board-row">
        <div class="board-column">{{ ___('increasedToday') }}:{{ $increasedToday }}</div>
        <div class="board-column">{{ ___('totalRechargeNum') }}:{{ $totalRechargeNum }}</div>
        <div class="board-column">{{ ___('totalWinLoseRatio') }}:{{ $totalWinLoseRatio }}</div>
    </div>
    <div class="board-row">
        <div class="board-column">{{ ___('totalRecharge') }}:{{ $totalRecharge }}</div>
        <div class="board-column">{{ ___('rechargeNumToday') }}:{{ $rechargeNumToday }}</div>
        <div class="board-column">{{ ___('winLoseRatioToday') }}:{{ $winLoseRatioToday }}</div>
    </div>

</div>
<div class="myChart">
    <canvas id="myChart"></canvas>
</div>

<script>
    $(function () {

            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["{{ ___('FirstDownloadNum') }}", "{{ ___('NextDayLogin') }}", "{{ ___('ThreeDaysLogin') }}", "{{ ___('FourDaysLogin') }}", "{{ ___('FiveDaysLogin') }}", "{{ ___('SixDaysLogin') }}", "{{ ___('SevenDaysLogin') }}"],
                    datasets: [{
                        label: '# {{ _i('用户留存数据') }}',
                        data: ["{{ $firstDownloadNum }}", "{{ $nextDayLogin }}", "{{ $threeDaysLogin }}", "{{ $fourDaysLogin }}", "{{ $fiveDaysLogin }}", "{{ $sixDaysLogin }}", "{{ $sevenDaysLogin }}"],
                        backgroundColor: [
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(54, 162, 235, 0.2)',
                            // 'rgba(255, 206, 86, 0.2)',
                            // 'rgba(75, 192, 192, 0.2)',
                            // 'rgba(153, 102, 255, 0.2)',
                            // 'rgba(255, 159, 64, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(54, 162, 235, 0.2)'
                            'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            // 'rgba(255, 99, 132, 1)',
                            // 'rgba(54, 162, 235, 1)',
                            // 'rgba(255, 206, 86, 1)',
                            // 'rgba(75, 192, 192, 1)',
                            // 'rgba(153, 102, 255, 1)',
                            // 'rgba(255, 159, 64, 1)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(54, 162, 235, 0.2)'
                            'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        }
    )
</script>
