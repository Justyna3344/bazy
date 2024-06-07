<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakładki</title>
    <body style="background-color: #f0f0f0;">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .tabs button {
            padding: 10px 20px;
            border: none;
            background-color: #f0f0f0;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .tabs button.active {
            background-color: #007BFF;
            color: white;
        }
        .tabs button:hover {
            background-color: #007BFF;
            color: white;
        }
        .tab-content {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div id="app" class="container">
        <div class="tabs">
            @foreach ($trasyPrzystanki as $idTrasy => $przystanki)
                <button @click="activeTab = 'trasy-{{ $idTrasy }}'" :class="{ 'active': activeTab === 'trasy-{{ $idTrasy }}' }">Trasa {{ $idTrasy }}</button>
            @endforeach
            <button @click="activeTab = 'szczegoly'" :class="{ 'active': activeTab === 'szczegoly' }">Szczegóły</button>
        </div>
        <div class="tab-content">
            @foreach ($trasyPrzystanki as $idTrasy => $przystanki)
                <div v-if="activeTab === 'trasy-{{ $idTrasy }}'">
                    <h2>Przystanki dla trasy {{ $idTrasy }}</h2>
                    <ul>
                        @foreach ($przystanki as $przystanek)
                            <li>{{ $przystanek }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div v-if="activeTab === 'szczegoly'">
                <h2>Szczegóły Pociągu</h2>
                <!-- Tutaj możesz dodać szczegóły dla każdej trasy -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                activeTab: 'trasy-1' // Domyślnie wyświetla pierwszą trasę
            }
        });
    </script>
</body>
</html>
