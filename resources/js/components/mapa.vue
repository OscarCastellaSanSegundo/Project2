<template>
    <div style="height: 100%; width: 100%; padding: 5px;">
        <div id="map"></div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            agencies: [],
            loading: false,
            map: {},
            accessToken:'pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ',
        }
    },
    methods: {
        selectAgencies(){
            this.loading = true;
            let me = this;
                axios
                    .get('/agencies')
                    .then(response => {
                        me.agencies = response.data;
                        this.crearMapa('Barcelona, Barcelona', me.agencies);
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
        },

        crearMapa(place, agencies){
            let me = this;
            mapboxgl.accesToken = this.accessToken;
            const mapboxClient = mapboxSdk({accesToken: mapboxgl.accessToken});
            mapboxClient.geocoding
            .forwardGeocode({
                query: agencies.carrer + ", " + agencies.municipis_id.nom,
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

                me.map = new mapboxgl.Map({
                    container: 'mapa',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: feature.center,
                    zoom: 12
                });
            })
            this.añadirMarker(agencies);
        }
    }
}
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
