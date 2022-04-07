
<template>
    <div id="map"></div>
</template>


<style scoped>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }

</style>
<script>

	mapboxgl.accessToken = 'pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wxbTF5ejhrMGcwcjNwbzNtNDF6eHhrZyJ9.6m-p-hYwQ54P0zV-vn7Qfw';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [-74.5, 40], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });

</script>
