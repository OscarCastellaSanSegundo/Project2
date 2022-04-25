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
            agenciesRecomanades: [],
            map: {},
            accessToken:
                "pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wyYTh6ZGg4MDFsZzNlb2EzMGVhejdvdCJ9.Zp8aJej_Dctrr88OrwbPrQ"
        };
    },
    methods: {
        markAgencies() {
            for (const agencies of this.agencies) {
                this.positionMark(agencies);
            }
        },

        selectAgencies() {
            let me = this;
            axios
                .get("/agencies")
                .then((result) => {
                    me.agencies = result.data;
                    this.positionMarkIncident("Valencia, Valencia");

                    this.markAgencies();
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        positionMarkIncident(place) {
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
                        container: "map2",
                        style: "mapbox://styles/mapbox/streets-v11",
                        center: feature.center,
                        zoom: 12,
                    });

                    // Crea un marcador y lo añade al mapa
                    new mapboxgl.Marker({
                        color: "#E74C3C",
                    })
                        .setLngLat(feature.center)
                        .addTo(me.map);
                });
        },
        positionMark(agencies) {
            let me = this;
            mapboxgl.accessToken = this.accessToken;

            const mapboxClient = mapboxSdk({
                accessToken: mapboxgl.accessToken,
            });
            mapboxClient.geocoding
                .forwardGeocode({
                    query: agencies.carrer + ", " + agencies.municipis.nom,
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
                        agencies,
                        marker,
                        feature,
                        me.map,
                        false
                    );

                    // create the popup
                    const popup = new mapboxgl.Popup({
                        offset: 25,
                    }).setDOMContent(div);

                    marker.setPopup(popup);
                });
        },
        createPopup(agencies, marker, feature, map, recomanat) {
            let me = this;
            const pMark = document.createElement("p");
            pMark.innerText = agencies.nom;
            pMark.className = "fw-bold";
            const btnRecomanar = document.createElement("button");
            btnRecomanar.dataset.recomanat = recomanat;
            btnRecomanar.dataset.agencies_id = agencies.id;
            if (recomanat) {
                btnRecomanar.className = "btn btn-secondary btn-sm";
                btnRecomanar.innerText = "Treure Recomananació";
            } else {
                btnRecomanar.className = "btn btn-primary btn-sm";
                btnRecomanar.innerText = "Recomanar";
            }

            btnRecomanar.addEventListener("click", (event) => {
                let btn = event.target;
                if (btn.dataset.recomanat == "true") {
                    me.agenciesRecomanades.splice(
                        me.agenciesRecomanades.indexOf(btn.dataset.agencies_id),
                        1
                    );
                    marker.remove();
                    let markernew = new mapboxgl.Marker({
                        color: "#8E44AD",
                        rotation: 0,
                    })
                        .setLngLat(feature.center)
                        .addTo(map);

                    let div = me.createPopup(
                        agencies,
                        markernew,
                        feature,
                        map,
                        false
                    );
                    // create the popup
                    const popup = new mapboxgl.Popup({
                        offset: 25,
                    }).setDOMContent(div);

                    markernew.setPopup(popup);
                } else {
                    me.agenciesRecomanades.push(btn.dataset.agencia_id);
                    console.log(me.agenciesRecomanades);
                    marker.remove();
                    let markernew = new mapboxgl.Marker({
                        color: "#1FC610",
                        rotation: 45,
                    })
                        .setLngLat(feature.center)
                        .addTo(map);

                    let div = me.createPopup(
                        agencies,
                        markernew,
                        feature,
                        map,
                        true
                    );
                    // create the popup
                    const popup = new mapboxgl.Popup({
                        offset: 25,
                    }).setDOMContent(div);

                    markernew.setPopup(popup);
                }
            });
            const div = document.createElement("div");
            div.className = "text-center";
            div.appendChild(pMark);
            div.appendChild(btnRecomanar);

            return div;
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
