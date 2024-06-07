<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakładki</title>
    <style>
        /* Styl dla kontenera */
        .container {
            max-width: 800px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
            display: flex; /* Ustawienie kontenera na flexbox */
            flex-direction: column; /* Układanie elementów w kolumnie */
            height: 100vh; /* Wysokość kontenera na całą wysokość widoku */
        }
        /* Styl dla zakładek */
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
            flex: 1; /* Rozciągnięcie zakładki na całą dostępną szerokość */
            transition: background-color 0.3s; /* Efekt przejścia dla zmiany koloru tła */
            border-radius: 5px; /* Zaokrąglenie rogów */
        }
        .tabs button.active {
            background-color: #007bff; /* Kolor tła dla aktywnej zakładki */
            color: #fff; /* Kolor tekstu dla aktywnej zakładki */
        }
        /* Styl dla treści zakładek */
        .tab-content {
            border: 1px solid #ddd;
            padding: 20px;
            flex: 1; /* Rozciągnięcie treści na całą dostępną wysokość */
            border-radius: 5px; /* Zaokrąglenie rogów */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div id="app" class="container">
    <div class="tabs">
        <button @click="activeTab = 'przystanki'" :class="{ 'active': activeTab === 'przystanki' }">Przystanki</button>
        <button @click="activeTab = 'szczegoly'" :class="{ 'active': activeTab === 'szczegoly' }">Szczegóły</button>
    </div>
    <div class="tab-content">
        <div v-if="activeTab === 'przystanki'">
            <h2>Lista Przystanków</h2>
            <ul>
                <li v-for="(przystanek, index) in przystanki" :key="index">
                    {{ przystanek.stacja_poczatek }} - {{ przystanek.stacja_koniec }}
                </li>
            </ul>
        </div>
        <div v-else-if="activeTab === 'szczegoly'">
            <h2>Szczegóły</h2>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            activeTab: 'przystanki',
            przystanki: [] // Tablica na przystanki, które pobierzemy z serwera
        },
        mounted() {
            // Pobieranie przystanków po załadowaniu strony
            this.getPobierzPrzystanki();
        },
        methods: {
            getPobierzPrzystanki() {
                // Wywołanie odpowiedniej ścieżki w kontrolerze Laravela do pobrania przystanków
                axios.get('/pobierz-przystanki')
                    .then(response => {
                        // Przypisanie pobranych przystanków do zmiennej przystanki w Vue.js
                        this.przystanki = response.data;
                    })
                    .catch(error => {
                        console.error('Błąd podczas pobierania przystanków:', error);
                    });
            }
        }
    });
</script>

</body>
</html>
