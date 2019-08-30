<template>
  <b-row class="mx-auto" align-v="center">
    <b-col align-self="center" cols="12" sm="12" md="12" lg="12" xl="12" class="bit-left-content-firststep">

        <b-row class="mx-auto" align-v="center">

          <b-col cols="12" sm="12" md="12" lg="6" xl="6" class="bit-right-content text-left">
              <img src="../assets/logowhite.png" alt="logo" class="bit-left-content-logowhite" >
          </b-col>

          <b-button pill @click="unlogin" variant="outline-danger" class="bit-unlog-button mt-4"><img src="../assets/power.png" alt="log" class="bit-unlog-pic" >Ausloggen</b-button>

          <b-col cols="10" sm="10" md="10" lg="5" xl="5" class="bit-form-content bit-form-content-inputs text-left">
            <b-form @submit.prevent="submit" class="w-100">
              <b-row class="bit-content-inner">
                <h1 class="bit-login-title mt-5">Erstellen Sie ein Ticket</h1>
                <p class="mt-4 mb-4" style="color:#818188">Would you like to pop in a CD and have a better quality of life, and even self improvement? </p>

                <hr class="mt-3 mb-3 p-0" style="width:100%; color:#000;">

              <b-col cols="12" sm="12" md="12" lg="12" xl="12" class="p-0">

            <p class="bit-input-description mb-0 mt-3">Kategorie</p>

            <b-form-group>
              <b-form-checkbox-group
                id="checkbox-group-1"
                v-model="selectedkategorie"
                :options="optionskategorie"
                name="flavour-1"
              ></b-form-checkbox-group>
            </b-form-group>

            <p class="bit-input-description mb-0 mt-3">Priorität</p>
            <b-form-group>
              <b-form-checkbox-group
                id="checkbox-group-2"
                v-model="selectedpriorit"
                :options="optionspriorit"
                name="flavour-1"
              ></b-form-checkbox-group>
            </b-form-group>
              </b-col>

            <p class="bit-input-description mb-0 mt-3">Ansprechpartner für Rückfragen</p>

            <b-form-select v-model="selected" :options="options"></b-form-select>
            </b-row>

            <b-row class="bit-content-inner">
              <p class="bit-input-description mb-0 mt-3">Betreff</p>
              <b-form-input
              v-model="Betreff"
              id="input-live"
              :state="BetreffState"
              ></b-form-input>

              <p class="bit-input-description mb-0 mt-3">Beschreibung</p>
              <b-form-input
              v-model="Beschreibung"
              id="input-live"
              :state="BeschreibungState"
              ></b-form-input>
            </b-row>

          <b-form-group class="d-flex justify-content-between">
            <b-row class="bit-content-inner mt-3">
              <b-col align-self="center" cols="6" sm="6" md="6" lg="6" xl="6" class="text-left p-0">
               <b-button pill variant="outline-danger" class="bit-botton-anfo mt-4">Abbrechen</b-button>
              </b-col>

              <b-col align-h="end" cols="6" sm="6" md="6" lg="6" xl="6" class="text-right p-0">
               <b-button pill type="submit" variant="danger" class="bit-botton-login mt-4 align-items-right">Ticket erstellen</b-button>
              </b-col>
            </b-row>
          </b-form-group>

            </b-form>
          </b-col>
        </b-row>
    </b-col>
  </b-row>
</template>

<script>
export default {

  computed: {
    BetreffState() {
      return this.Betreff.length > 1 ? true : false
    },
    BeschreibungState() {
      return this.Beschreibung.length > 1 ? true : false
    }
  },
    data() {
      return {
        Betreff: '',
        Beschreibung: '',
        selected: [], // Must be an array reference!
        optionskategorie: [
          { text: 'Support ', value: 'Support ' },
          { text: 'Anfrage ', value: 'Anfrage' },
          { text: 'Bestellung ', value: 'Bestellung ' }
        ],
        optionspriorit: [
          { text: 'Niedrig ', value: 'Niedrig ' },
          { text: 'Mittel ', value: 'Mittel ' },
          { text: 'Hoch ', value: 'Hoch ' },
          { text: 'Eskalation ', value: 'Eskalation ' }
        ],
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option' },
          { value: { C: '3PO' }, text: 'This is an option with object value' },
          { value: 'd', text: 'This one is disabled', disabled: true }
        ]
      }
    },
    methods: {
      submit () {
        if ( this.BetreffState && this.BeschreibungState) {
          this.$router.push({name: 'table'})
        } else {
          console.log('not ok');
        }
      },
      unlogin() {
        this.$router.push({name: 'registration'})
      }


    }
  }
</script>

<style>
.bit-left-content-firststep {
  background-image: url(../assets/city.jpg);
  background-position: center center;
  background-size: cover;
  min-height: 100vh;
}

@media (max-width: 992px) {
  .bit-form-content-inputs {
        margin-top: 10px!important;
        margin-left: auto;
        margin-right: auto;
      }

  .bit-left-content-logowhite {
      margin-top: 7%!important;}

  }

.bit-form-content-inputs {
  margin-top: 110px;
  padding-bottom: 4%!important;
  margin-bottom: 110px!important;
}
.bit-content-inner {
  padding-left: 10%;
  padding-right: 10%;
}
.bit-form-content {
  background-color: #f9f9fb;
  padding-right: 10%;
  border-radius: 5px;
}

.bit-unlog-pic {
  height: 13px;
  width: 13px;
  margin-bottom: 5px;
  margin-right: 10px;
}

.bit-unlog-button {
  position: absolute;
  top: 1%;
  right:3%;
  color: #fff!important;
  padding-left: 25px!important;
  padding-right: 25px!important;
  padding-top: 7px!important;
  padding-bottom: 7px!important;

}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label:after {
    background-image: url(../assets/box.png)!important;
    background-size: contain;
    background-color: #aa072e!important;
    outline-color:  #aa072e!important;
    color:  #aa072e!important;

  }

  .custom-control-label::before, .custom-control-label::after {
    box-shadow: none!important;
    outline: none!important;

  }

  .custom-control-input:checked ~ .custom-control-label::before {

    border-color: #aa072e!important;
    background-color: #aa072e!important;
}

.custom-control-input:active {
    background-color: transparent!important;
}

.custom-control-input:focus {
    border-color: #aa072e!important;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {

  background-color: rgba(170, 7, 46, 0.25)!important;
  border-color: rgba(170, 7, 46, 0.25)!important;
}

.custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
    box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #aa072e!important;
}

</style>
