@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .tile {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            width: calc(50% - 20px); 
            float: left;
        }
        .btn {
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
</head>
<body>
    <div class="tile">
        <h2>Liczba użytkowników</h2>
        <p>Obecna liczba użytkowników: <strong>2</strong></p>
    </div>
    <div class="tile">
        <h2>Sprzedaż biletów</h2>
        <p>Dzisiejszego dnia sprzedało się <strong>30</strong> biletów </p>
    </div>
    <div class="tile">
        <h2>Inne statystyki</h2>
        <ul>
            <li>Łączna liczba zamówień: <strong>500</strong></li>
            <li>Średnia ilość zamówień na użytkownika: <strong>2</strong></li>
            <li>Najpopularniejsza trasa <strong>Kraków - Warszawa</strong></li>
        </ul>
        <div>
            <a href="personel" class="btn">Zarządzanie personelem</a>
            <a href="wagony" class="btn">Zarządzanie wagonami</a>
            <a href="stacje" class="btn">Zarządzanie stacjami</a>
            <a href="trasy" class="btn">Zarządzanie trasami</a>
            <a href="relacje" class="btn">Relacje</a>
        </div>
    </div>
    <div class="tile">
        <h2>Ilość odwołanych przejazdów ostatnie 6 miesięcy</h2>
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>

    <script>
        // Dane do wykresu
        var data = {
            labels: ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec"],
            datasets: [{
                label: "Odwołane przejazdy",
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: [10, 20, 30, 25, 35, 40], 
            }]
        };

        // Utwórz wykres
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
@stop
