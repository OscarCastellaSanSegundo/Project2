<template>
    <div style="height: 100%; width: 100%; padding: 5px;">
        <div id="map"></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            agencies: [],
            map: {},
            loading:false,
            accessToken:
                "pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ"
        };
    },
        methods: {
            declaraAgencia() {
                for (const agencia of this.agencies) {
                    this.crearMapa(agencia);
                }
            },

            selectAgencies() {
                this.loading=true;
                let me = this;
                axios
                    .get("/agencia")
                    .then((response) => {
                        me.agencies = response.data;
                        this.crearMapa('Barcelona, Barcelona' ,agencia);
                    })
                    .catch((err) => {
                        console.log(err);
                    })
                    .finally(()=> this.loading=false);
            },
            crearMapa(place,agencia) {
                let me = this;
                mapboxgl.accessToken = this.accessToken;

                const mapboxClient = mapboxSdk({
                    accessToken: mapboxgl.accessToken,
                });
                mapboxClient.geocoding
                    .forwardGeocode({
                        query: place,
                        autocomplete: false,
                        limit: 1,
                    })
                    .send()
                    .then((response) => {
                        if (
                            !response ||
                            !response.body ||
                            !response.body.features ||
                            !response.body.features.length
                        ) {
                            console.error("Invalid response:");
                            console.error(response);
                            return;
                        }

                    const feature = response.body.features[0];

                    me.map = new mapboxgl.Map({
                        container: "map",
                        style: "mapbox://styles/mapbox/streets-v11",
                        center: feature.center,
                        zoom: 12,
                    });

                    // Create a marker and add it to the map.
                    new mapboxgl.Marker({
                        color: "#E74C3C",
                    })
                        .setLngLat(feature.center)
                        .addTo(me.map);
                });
                    this.añadirMarker(agencia);
            },

            añadirMarker(agencia){
                let me = this;
                mapboxgl.accessToken = me.accessToken;

                const mapboxClient = mapboxSdk({
                    accessToken: mapboxgl.accessToken,
                });
                mapboxClient.geocoding
                    .forwardGeocode({
                        query: agencia.carrer + ", " + agencia.municipi.nom + ", " + agencia.codi_postal,
                        autocomplete: false,
                        limit: 1,
                    })
                    .send()
                    .then((response) => {
                        if (
                            !response ||
                            !response.body ||
                            !response.body.features ||
                            !response.body.features.length
                        ) {
                            console.error("Invalid response:");
                            console.error(response);
                            return;
                        }
                            const feature = response.body.features[0];

                            const marker = new mapboxgl.Marker({
                                color: "#8E44AD",
                            });

                            marker.setLngLat(feature.center).addTo(me.map);

                           // recorrer todas las agencias foreach
                            // agencia.forEach(popup => {
                            // // crear the popup
                            //     const popup = new mapboxgl.Popup({
                            //     offset: 25 }).setText(
                            //         'Soy un popup'
                            //     );

                            //     // create DOM element for the marker
                            //     const el = document.createElement('div');
                            //     el.id = 'marker';

                            //     // create the marker
                            //     new mapboxgl.Marker(el)
                            //     .setLngLat(monument)
                            //     .setPopup(popup) // sets a popup on this marker
                            //     .addTo(map);
                            // })




                });
            },
    },

    created() {},
    mounted() {
        console.log("Component mounted.");
        this.selectAgencies();
    },
};
</script>

<style>
#map {
    width: 100%;
    height: 100%;
}
#sortir {
    position: fixed;
    right: 20px;
    bottom: 20px;
}
</style>
