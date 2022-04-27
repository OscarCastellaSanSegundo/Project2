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
            loading:true,
            accessToken:
                "pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ"
        };
    },
        methods: {
        markAgencies() {
            for (const agencia of this.agencies) {
                this.positionMark(agencia);
            }
        },

        selectAgencies() {
            this.loading=false;
            let me = this;
            axios
                .get("/agencia")
                .then((result) => {
                    me.agencies = result.data;
                    // this.positionMarkIncident(agencia);
                    this.markAgencies('Barcelona,Barcelona' ,agencia);
                })
                .catch((err) => {
                    console.log(err);
                })
                .finally(()=> this.loading=false);
        },
        positionMark(agencia) {
            let me = this;
            mapboxgl.accessToken = this.accessToken;

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

                    let div = this.createPopup(
                        agencia,
                        marker,
                        feature,
                        me.map,
                        false
                    );


                    const popup = new mapboxgl.Popup({
                        offset: 25,
                    }).setDOMContent(div);

                    marker.setPopup(popup);
                });
        },
    },

    created() {

    },
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
