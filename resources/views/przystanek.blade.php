<div id="app" class="container">
    <div class="tabs">
        <button @click="activeTab = 'przystanki'" :class="{ 'active': activeTab === 'przystanki' }">Przystanki</button>
        <button @click="activeTab = 'szczegoly'" :class="{ 'active': activeTab === 'szczegoly' }">Szczegóły</button>
    </div>
    <div class="tab-content">
        <div v-if="activeTab === 'przystanki'">
            <h2>Lista Przystanków</h2>
            <ul>
                <li>Przystanek 1</li>
                <li>Przystanek 2</li>
                <li>Przystanek 3</li>
                <!-- Tutaj możesz dodać więcej przystanków -->
            </ul>
        </div>
        <div v-else-if="activeTab === 'szczegoly'">
            <h2>Szczegóły</h2>
            <p>Tutaj możesz umieścić szczegółowe informacje o wybranym przystanku.</p>
        </div>
    </div>
</div>
<script src="{{ asset('js/vue.js') }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            activeTab: 'przystanki'
        }
    });
</script>
