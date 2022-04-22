<template>
  <div id="map">
    <mapbox
      access-token="pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ"
      :map-options="{
        style: 'mapbox://styles/mapbox/light-v9',
        center: [-96, 37.8],
        zoom: 3,
      }"
      @map-load="loaded"
      @map-click:points="clicked"
      @map-mouseenter:points="mouseEntered"
      @map-mouseleave:points="mouseLeft"
    />
  </div>
</template>

<script>
// import Mapbox from 'mapbox-gl-vue'
// import PopupContent from './PopupContent.vue'

export default {
  methods: {

    loaded() {
        mapboxgl.accessToken = 'pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ';
            const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
            mapboxClient.geocoding
            .forwardGeocode({
                query: 'Barcelona, Barcelona',
                autocomplete: false,
                limit: 1
            })
            .send()
            .then((response) => {
            if (
                !response ||
                !response.body ||
                !response.body.features ||
                !response.body.features.length
            ) {
                console.error('Invalid response:');
                console.error(response);
                return;
            }
            const feature = response.body.features[0];

            const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: feature.center,
            zoom: 10
            });

            // Create a marker and add it to the map.
            new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
            });
    },

    clicked(map, e) {
      if (e.features) {
        const coordinates = e.features[0].geometry.coordinates.slice()

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
          coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360
        }

        new mapboxgl.Popup()
          .setLngLat({ lng: coordinates[0], lat: coordinates[1] })
          .setHTML('<div id="vue-popup-content"></div>')
          .addTo(map)

        new PopupContent({
          propsData: { feature: e.features[0] },
        }).$mount('#vue-popup-content')
      }
    },
    mouseEntered(map) {
      map.getCanvas().style.cursor = 'pointer'
    },
    mouseLeft(map) {
      map.getCanvas().style.cursor = ''
    },
  },
  mounted() {
    this.loaded();
    }
}

</script>




<style>
#map {
  width: 100%;
  height: 500px;
}
</style>
