@extends('layouts.app')

@section('content')
<div class="container">
    <div class="tile-container">
        <div class="tile">
            <h2>Liczba użytkowników</h2>
            <p>Obecna liczba użytkowników: <strong>{{ $userCount }}</strong></p>
        </div>

        <div class="tile">
            <h2>Ostatnie aktywności użytkowników</h2>
            <ul>
                @foreach($recentUsers as $user)
                    <li>{{ $user->name }} - Ostatnio zalogowany: {{ $user->last_login }}</li>
                @endforeach
            </ul>
        </div>

        <div class="tile">
            <h2>Zarządzanie personelem</h2>
            <button class="collapsible">Opcje</button>
            <div class="content">
                <div>
                    <a href="{{ url('personel') }}" class="btn">Zarządzanie personelem</a>
                    <p>Łączna liczba personelu: <strong>{{ $personnelCount }}</strong></p>
                    <a href="{{ url('wagony') }}" class="btn">Zarządzanie wagonami</a>
                </div>
            </div>
        </div>

        <div class="tile">
            <h2>Zarządzanie trasami i stacjami</h2>
            <button class="collapsible">Opcje</button>
            <div class="content">
                <div>
                    <a href="{{ url('stacje') }}" class="btn">Zarządzanie stacjami</a>
                    <p>Liczba stacji: <strong>{{ $stationCount }}</strong></p>
                    <a href="{{ url('trasy') }}" class="btn">Zarządzanie trasami</a>
                    <p>Liczba tras: <strong>{{ $routeCount }}</strong></p>
                    <a href="{{ url('relacje') }}" class="btn">Relacje</a>
                    <p>Liczba relacji: <strong>{{ $relationCount }}</strong></p>
                </div>
            </div>
        </div>

        <div class="tile-wide">
            <h2>Liczba wejść na stronę (ostatnie 7 dni)</h2>
            <canvas id="loginChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var data = {
        labels: {!! json_encode(array_keys($loginsPerDay)) !!},
        datasets: [{
            label: "Aktywność logowania użytkowników",
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: {!! json_encode(array_values($loginsPerDay)) !!},
        }]
    };


    var ctx = document.getElementById('loginChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        callback: function(value, index, values) {
                            return Math.ceil(value);
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    enabled: true,
                    mode: 'index',
                    intersect: false
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            }
        }
    });


    var coll = document.getElementsByClassName("collapsible");
    for (var i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>



<style>
 .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.tile-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.tile, .tile-wide {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 10px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.tile {
    width: calc(50% - 20px); 
}

.tile-wide {
    width: 100%;
}

.collapsible {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 16px;
    margin-top: 10px;
    border-radius: 5px;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f9f9f9;
    margin-top: 10px;
}

.content .btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
@endsection
