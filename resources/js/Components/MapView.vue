<template>
    <div id="map"></div>
</template>

<script>
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

export default {
    name: 'MapView',
    mounted() {
        const map = L.map('map').setView([47.238402, 6.029203], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        L.marker([47.238402, 6.029203])
            .addTo(map)
            .openPopup();
    },
};
</script>

<style scoped>
.leaflet-container {
    height: 100%;
    width: 100%;
}
</style>
