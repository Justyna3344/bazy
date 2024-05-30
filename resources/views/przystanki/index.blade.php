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
            <button @click="activeTab = 'przystanki'" :class="{ 'active': activeTab === 'przystanki' }">Przystanki</button>
            <button @click="activeTab = 'szczegoly'" :class="{ 'active': activeTab === 'szczegoly' }">Szczegóły</button>
        </div>
        <div class="tab-content">
            <div v-if="activeTab === 'przystanki'">
                <h2>Przystanki</h2>
                
            </div>
            <div v-else-if="activeTab === 'szczegoly'">
                <h2>Szczegóły Pociągu</h2>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                activeTab: 'przystanki'
            }
        });
    </script>
</body>
</html>
