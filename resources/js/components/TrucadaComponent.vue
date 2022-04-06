<template>
    <div>
        <div class="principalCarta">
            <div class="zonaFormulario">

                <div>
                    <div class="card bordeRedondo zoomCardGrande" style="width: 100%; margin-top: 10px;">
                        <img class="card-img-top imagenEmergencia" :src="imagenCabecera" alt="Card image cap">

                        <div class="card-body">
                            <div class="simuladorLlamada">
                                <div>
                                    <h4 class="card-title">Localització de la Emergencia</h4>
                                </div>

                                <div>
                                    <button type="button" class="btn btn-light botonTutorial" data-bs-toggle="modal" href="#tutorial" role="button">¡Tutorial!</button>
                                    <button type="button" class="btn btn-danger botonSimularLlamada" data-bs-toggle="modal" href="#simularLlamada" role="button">¡Simular Trucada!</button>
                                </div>
                            </div>


                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="fora_catalunya" value="fora_catalunya" name="fora_catalunya" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4" v-model="cartaTrucada.fora_catalunya">
                                    <label class="form-check-label" for="fora_catalunya">Fora de Catalunya</label>
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                    <img :src="imagenHelpbox" alt="" width="20" height="20" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                                </a>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="col provinciaMunicipio">

                                        <div class="form-group row mb-2">
                                            <div class="col-sm-12">
                <!--                                                 <input type="text" class="form-control form-control-sm" placeholder="Municipi" aria-label="Provincia" aria-describedby="button-addon2" name="municipis_id"> -->
                                                <div>
                                                    <vue-bootstrap-typeahead @hit="onMunicipiSel" :serializer="serializarValor"
                                                    v-model="busquedaMunicipi" :data="municipis" placeholder="municipis" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                        <div class="form-group row mb-2">
                                            <div class="col-sm-12">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Comarca" aria-label="Comarca" aria-describedby="button-addon2" v-model="comarcaNom" style="max-height:350px;padding-top:5px;z-index:999">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col provinciaMunicipio" >

                                        <div class="form-group row mb-2">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Provincia" aria-label="Provincia" aria-describedby="button-addon2" name="provincies_id" v-model="provinciaNom">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-1">

                                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                        <img alt="" width="20" height="20" :src="imagenHelpbox">
                                    </a>

                                </div>

                            </div>


                            <div class="row">
                                <div class="col-8">
                                    <h4>Tipus de localització</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-1 col-sm-2" style="margin-right: 15px">
                                    <div class="col provinciaMunicipio">

                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="tipus_localitzacions_id" id="inlineRadio1" value="option1" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                            <label class="form-check-label" for="inlineRadio1">Provincia</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-7 col-sm-9">
                                    <div class="collapse show multi-collapse" id="multiCollapseExample4">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipus_localitzacions_id" id="inlineRadio2" value="option2" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                                            <label class="form-check-label" for="inlineRadio2">Carrer</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipus_localitzacions_id" id="inlineRadio3" value="option3" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">
                                            <label class="form-check-label" for="inlineRadio3">Punt singular</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipus_localitzacions_id" id="inlineRadio4" value="option4" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3">
                                            <label class="form-check-label" for="inlineRadio4">Carretera</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipus_localitzacions_id" id="inlineRadio5" value="option5" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                            <label class="form-check-label" for="inlineRadio5">Població</label>
                                        </div>
                                        <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                            <img :src="imagenHelpbox" alt="" width="20" height="20">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1" style="margin-top: 1%">


                                            <div class="form-group row mb-2 gx-2" >
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Descripció" aria-label="Descripció" aria-describedby="button-addon2" name="descripcio_localitzacio" v-model="cartaTrucada.descripcio_localitzacio">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Detall" aria-label="Detall" aria-describedby="button-addon2" name="detall_localitzacio" v-model="cartaTrucada.detall_localitzacio">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Altres referències" aria-label="Altres referències" aria-describedby="button-addon2" name="altres_ref_localitzacio" v-model="cartaTrucada.altres_ref_localitzacio">
                                                </div>
                                                <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                                </a>
                                            </div>


                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col mb-3">
                                    <div class="collapse multi-collapse" id="multiCollapseExample5" style="margin-top: 1%">


                                            <div class="form-group row mb-2 gx-2">
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Altres referències" aria-label="Otras referencias" aria-describedby="button-addon2" name="" v-model="cartaTrucada.altres_ref_localitzacio">
                                                </div>
                                                <a class="col-sm-1 col-navbar-brand-sm" href="#">
                                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                                </a>
                                            </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mb-2">
                                <h4>Tipus d'incident</h4>
                            </div>

                            <div class="row">
                                <div class="col-5">

                                    <select class="form-control" name="tipus_incident" id="tipus_incident" v-model="tipusIncidentId" @input="onIncidentSel(tipusIncidentId)">
                                        <option v-for="tipusIncident in tipusIncidents" :key="tipusIncident.id" :value="tipusIncident.id">{{ tipusIncident.descripcio }}</option>
                                    </select>

                                </div>
                                <div class="col-6">

                                    <select class="form-select" aria-label=".form-select-sm example"  name="incidents_id">
                                        <option v-for="incident in incidentsIdSel" :key="incident.id" :value="incident.id">{{ incident.descripcio }}</option>
                                    </select>

                                </div>
                                <div class="col-1">

                                    <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                        <img :src="imagenHelpbox" alt="" width="20" height="20">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card col-12 bordeRedondo zoomCardGrande" style="margin-top: 10px">
                    <div class="card-body">
                        <div class="row col-12">
                            <div class="col-12">
                                <h4>Expedients existents</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 tablaExpedientesScroll">

                                <table class="table table-hover tablaExpedientes">
                                    <thead class="table colorTabla">
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Tipus d'incident</th>
                                        <th scope="col">Localització</th>
                                        <th scope="col">Direcció</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr  v-for="expedient in expedients" :key="expedient.id" :value="expedient.id">
                                        <th scope="row">{{ expedient.id }}</th>
                                        <td>{{ expedient.data_creacio }}</td>
                                        <td>{{ expedient.estats_expedients_id }}</td>
                                        <td><button class="btn btn-light botonesTabla" type="submit">Seleccionar</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-12 mt-3">
                            <h4>Crear expedient</h4>
                        </div>
                        <div class="row col-12 mt-2">
                            <div class="col-6">
                                <button type="button" class="btn btn-light botonExpedienteNuevoConRecomendacion" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Expedient nou amb recomanació</button>
                            </div>
                            <div class="col-6 ">
                                <button type="button" class="btn btn-light botonExpedienteNuevo">Expedient nou</button>
                            </div>
                        </div>

                    </div>

                </div>



            </div>

            <div class="zonaTelefono">

                <div>
                    <div class="card bordeRedondo zoomCard" style="width: 99%; margin-top: 10px;">
                        <div class="card-body row mb-0 cronometro">
                            <h5>Nº Trucada</h5>
                            <div class="col-sm-6 mb-0">
                                <p>{{ cartaTrucada.codi_trucada }}</p>
                                <input id="codiTrucadaP" name="codi_trucada" type="hidden" v-model="cartaTrucada.codi_trucada">
                            </div>
                            <div class="col-sm-6">
                                <h2 id="crono">0:00</h2>
                                <input name="temps_trucada" type="hidden" value="" id="temps_trucada">
<!--                                 <input name="usuaris_id" type="hidden" value="{{ Auth::user()->id }}" id="temps_trucada"> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card informacionLlamante bordeRedondo zoomCard" style="width: 100%; margin-top: 10px">
                    <div class="card-body">
                        <h5 class="card-title">Informació del trucant</h5>

                        <div class="form-group row mb-2">
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" placeholder="Nom" aria-label="Nom" aria-describedby="button-addon2" name="nom_trucada" v-model="cartaTrucada.nom_trucada">
                            </div>
                            <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                <img :src="imagenHelpbox" alt="" width="20" height="20">
                            </a>
                        </div>
                        <div class="form-group row mb-2">
                            <div class="col-sm-10">
                                <input type="number" class="form-control form-control-sm" placeholder="Telèfon" aria-label="Telefono" aria-describedby="button-addon2" id="telefon" name="telefon" v-model="cartaTrucada.telefon" v-on:keyup.enter="buscarTelefon(cartaTrucada.telefon)">
                            </div>
                            <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                <img :src="imagenHelpbox" alt="" width="20" height="20">
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" id="nota_comuna">Nota comuna</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="nota_comuna" v-model="cartaTrucada.nota_comuna"></textarea>
                        </div>

                    </div>
                </div>


                <div>
                    <div class="card procedenciaLlamada bordeRedondo zoomCard" style="width: 100%; margin-top: 10px;">
                        <div class="card-header">
                        <h5>Procedència de la trucada</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group row mb-2 gx-1">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-sm" placeholder="Procedència" aria-label="Procedencia" aria-describedby="button-addon2" name="procedencia_trucada" v-model="cartaTrucada.procedencia_trucada">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-sm" placeholder="Origen" aria-label="Origen" aria-describedby="button-addon2" name="origen_trucada" v-model="cartaTrucada.origen_trucada">
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm gx-4" href="#">
                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                </a>
                            </div>

                            <div class="form-group row mb-2 gx-3">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" placeholder="Municipi" aria-label="Municipi" aria-describedby="button-addon2" name="municipis_id_trucada">
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                </a>
                            </div>

                            <div class="form-group row mb-2 gx-3">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" placeholder="Adreça" aria-label="Direccion" aria-describedby="button-addon2" name="dades_personals_id_adreca" v-model="cartaTrucada.adreca_trucada">
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm" href="#">
                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                </a>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" placeholder="Informació del telèfon" aria-label="Informacion del telefono" aria-describedby="button-addon2" name="dades_personals_id_antecedents">
                                </div>
                                <a class="col-sm-2 col-navbar-brand-sm gx-2" href="#">
                                    <img :src="imagenHelpbox" alt="" width="20" height="20">
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="modal fade zonaMapa bordeRedondo" id="exampleModalToggle" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">

                        <h1 class="text-center">Recomanacions</h1>
                        <div class="row" >
<!--
                <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
                <div id="map"></div> -->




                        </div>
                        <div class="row text-center">
                            <div class="col-4 box1 pt-4">
                                <a href="tel:+123456789"><span><img :src="imagenPolicia" class="imagenAgenciaRecomendacion"></span>
                                <h3 class="d-none d-lg-block d-xl-block">Policia</h3>
                                <p class="d-none d-lg-block d-xl-block">Veure policies disponibles</p></a>
                            </div>
                            <div class="col-4 box2 pt-4">
                                <a href=""><span><img :src="imagenAmbulancia" class="imagenAgenciaRecomendacion2"></span>
                                <h3 class="d-none d-lg-block d-xl-block">Ambulància</h3>
                                <p class="d-none d-lg-block d-xl-block">Veure ambulàncies disponibles</p></a>
                            </div>
                            <div class="col-4 box3 pt-4">
                                <a href="mailto:test@test.com"><span><img :src="imagenBomberos" class="imagenAgenciaRecomendacion3"></span>
                                <h3 class="d-none d-lg-block d-xl-block">Bombers</h3>
                                <p class="d-none d-lg-block d-xl-block">Veure bombers disponibles</p></a>
                            </div>
                        </div>
                        <button class="btn btn-light crearExpedienteRecomendacion" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Crear expedient</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="simularLlamada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: rgb(255, 0, 0); height: 100px">
                    <div class="modal-body">
                        <div class="bodySimuladorLlamada">
                            <div>
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" href="#Llamada" role="button">¡Trucant existent!</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" href="#Llamada" role="button">¡Trucant nou!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade fondoSimuladorLLamada" id="Llamada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  >
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content" style="border-radius: 20px; background-color:rgb(255, 0, 0)">
                    <div class="modal-body tituloSimuladorLlamada">
                        <img class="card-img-top imagenEmergencia" :src="imagenEmergencia" alt="Card image cap" >
                        <div class="bodySimuladorLlamada2">
                            <div>
                                <button type="button" class="btn btn-dark botonCogerLlamada" id="botonCogerLlamada" data-bs-dismiss='modal'>¡Agafar trucada!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
        <style>
/*         #marker {
        background-image: url('https://docs.mapbox.com/mapbox-gl-js/assets/washington-monument.jpg');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        }

        .mapboxgl-popup {
        max-width: 200px;
        } */
        </style>

        <style>
/*         body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; } */
        </style>
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
        <script>
/*             mapboxgl.accessToken = 'pk.eyJ1IjoiYm9yamFnYXJjaWEiLCJhIjoiY2wxbTF5ejhrMGcwcjNwbzNtNDF6eHhrZyJ9.6m-p-hYwQ54P0zV-vn7Qfw';
        const monument = [-77.0353, 38.8895];
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: monument,
        zoom: 15
        }); */

        // create the popup
/*         const popup = new mapboxgl.Popup({ offset: 25 }).setText(
        'Construction on the Washington Monument began in 1848.'
        ); */

        // create DOM element for the marker
/*         const el = document.createElement('div');
        el.id = 'marker'; */

        // create the marker
/*         new mapboxgl.Marker(el)
        .setLngLat(monument)
        .setPopup(popup)
        .addTo(map); */
    export default {

        data(){
            return{
                imagenEmergencia: 'http://localhost/Project2/public/imagenes/Llamada.gif',
                imagenCabecera: 'http://localhost/Project2/public/imagenes/EMERGENCIA3.png',
                imagenHelpbox: 'http://localhost/Project2/public/imagenes/informacion.png',
                imagenPolicia: 'http://localhost/Project2/public/imagenes/cochePolicia.png',
                imagenAmbulancia: 'http://localhost/Project2/public/imagenes/furgonAmbulancia.png',
                imagenBomberos: 'http://localhost/Project2/public/imagenes/camionBomberos.png',
                municipis: [],
                provincies: [],
                comarques: [],
                tipusIncidents: [],
                incidents: [],
                expedients: [],
                estatExpedients: [],
                agencies: [],
                dadesPersonals: [],
                busquedaMunicipi: "",
                municipiSel: {},
                comarcaId: "",
                comarcaNom: "",
                provinciaNom: "",
                incidentsIdSel: [],
                codi: "",
                tipusIncidentId: "",
                cartaTrucada: {
                    id: "",
                    codi_trucada: "",
                    data_hora: "",
                    temps_trucada: "",
                    dades_personals_id: "",
                    telefon: "",
                    procedencia_trucada: "",
                    origen_trucada: "",
                    nom_trucada: "",
                    municipis_id_trucada: "",
                    adreca_trucada: "",
                    fora_catalunya: false,
                    provincies_id: "",
                    municipis_id: "",
                    tipus_localitzacions_id: "",
                    descripcio_localitzacio: "",
                    detall_localitzacio: "",
                    altres_ref_localitzacio: "",
                    incidents_id: "",
                    nota_comuna: "",
                    expedients_id: "",
                    usuaris_id: ""
                },
                cartesTrucadesHasAgencies: {
                    cartes_trucades_id: "",
                    agencies_id: "",
                    estats_agencies_id: ""
                },
                dadesPersonal: {
                    id: "",
                    telefon: "",
                    adreca: "",
                    antecedents: ""
                },
                expedient: {
                    id: "",
                    data_creacio: "",
                    data_ultima_modificacio: "",
                    estats_expedients_id: ""
                },
            }
        },
        methods: {
            selectAll(){
                let me = this;
                axios
                    .get('/provincia')
                    .then( response => {
                        me.provincies = response.data;
                    })
                    .catch( error => {
                        console.log(error)
                        this.errored = true;
                    })
                    .finally(() => this.loading = false)

                let me2 = this;
                axios
                    .get('/municipi')
                    .then( response => {
                        me2.municipis = response.data;
                    })
                    .catch( error => {
                        console.log(error)
                        this.errored = true;
                    })
                    .finally(() => this.loading = false)

                let me3 = this;
                axios
                    .get('/comarca')
                    .then( response => {
                        me3.comarques = response.data;
                    })
                    .catch( error => {
                        console.log(error)
                        this.errored = true;
                    })
                    .finally(() => this.loading = false)

                let me4 = this;
                axios
                    .get('/tipusIncident')
                    .then( response => {
                        me4.tipusIncidents = response.data;
                    })
                    .catch ( error => {
                        console.log(error)
                        this.errored = true;
                    })
                    .finally(() => this.loading = false)

                let me5 = this;
                axios
                    .get('/incident')
                    .then( response => {
                        me5.incidents = response.data;
                    })
                    .catch ( error => {
                        console.log(error)
                        this.errored = true;
                    })
                    .finally(() => this.loading = false)
                let me6 = this;
                axios
                    .get('/expedient')
                    .then( response => {
                        me6.expedients = response.data;
                    })
                    .finally(() => this.loading = false)
                let me7 = this;
                axios
                    .get('/estatExpedient')
                    .then( response => {
                        me7.estatExpedients = response.data;
                    })
                    .finally(() => this.loading = false)
                let me8 = this;
                axios
                    .get('/agencia')
                    .then( response => {
                        me8.agencies = response.data;
                    })
                    .finally(() => this.loading = false)
                let me9 = this;
                axios
                    .get('/dadesPersonals')
                    .then( response => {
                        me9.dadesPersonals = response.data;
                    })
                    .finally(() => this.loading = false)


            },
            // Función que convierte el objeto a cadena. Es llamado para mostrarse en la lista
            serializarValor(municipi){
                return municipi.nom;
            },
            onMunicipiSel(municipi){
                this.municipiSel = municipi;
                this.comarcaId = municipi.comarques_id;
                this.comarcaNom = this.comarques[this.comarcaId-2].nom;
                this.provinciaNom = this.provincies[this.comarques[this.comarcaId-1].provincies_id-1].nom;
            },
            onIncidentSel(id){
                var i = 0;
                if (this.incidentsIdSel != null) {
                    this.incidentsIdSel.splice(0,this.incidentsIdSel.length)
                }
                while(this.incidents.length > i){
                    if(this.incidents[i].classes_incidents_id == id){
                        this.incidentsIdSel.push(this.incidents[i]);
                    }
                    i++;
                }
            },
            buscarTelefon (telefon){
                var i = 0;
                while(this.dadesPersonals.length > i){
                    if(this.cartaTrucada[i].telefon == telefon){
                        console.log("gvreg");
                    }
                    i++;
                }
            },
            crearCodigo() {
                this.codi = Date.now();
                this.cartaTrucada.codi_trucada = String(this.codi).slice(-12);
    /*             codigoLlamada.innerHTML = codigoFinal; */
            },
        },
        created(){
            this.selectAll();
            this.crearCodigo();
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
