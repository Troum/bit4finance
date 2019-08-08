<template>
  <b-row class="mx-auto">
    <b-col cols="12" class="bit-top-content">
        <img src="../assets/logowhite.png" alt="logo" class="bit-top-content-logowhite" >
    </b-col>

    <b-col cols="12" class="overflow-auto">

      <b-row align-h="end" class="bit-content-inner mt-3 mb-5">

        <div>
          <b-dropdown size="lg" id="dropdown-form" no-caret text="Filter" ref="dropdown" dropleft variant="outline-danger" class="bit-botton-anfo m-2 mr-4 bit-filter">
            <b-dropdown-form style="max-width:100%; height:80%; background-color:transparent;" >
              <b-row>
                <b-col cols="6" class="overflow-auto">
                    <h1>Filter</h1>
                </b-col>
                <b-col cols="6" class="overflow-auto text-right">
                  <b-dropdown-item-button>
                      <img src="../assets/cross.jpg"  alt="close" class="ml-3 bit-unlog-pic" >
                  </b-dropdown-item-button>
                </b-col>
                  <b-dropdown-divider></b-dropdown-divider>
              </b-row>

              <b-row>
                <b-col cols="6" class="overflow-auto">
                  <b-form-group label="Datum von" label-for="Datum von" @submit.stop.prevent>
                          <b-form-input
                          id="dropdown-form-email"
                          size="sm"
                          placeholder="Alle"
                          ></b-form-input>
                  </b-form-group>
                </b-col>
                <b-col cols="6" class="overflow-auto">
                  <b-form-group label="Datum bis" label-for="Datum bis" @submit.stop.prevent>
                    <b-form-input
                      id="dropdown-form-email"
                      size="sm"
                      placeholder="Alle"
                    ></b-form-input>
                  </b-form-group>
                </b-col>
                  <b-dropdown-divider></b-dropdown-divider>
              </b-row>


        <b-form-group label="Typ" label-for="Typ" @submit.stop.prevent>
          <b-form-input
            id="Typ"
            size="sm"
            placeholder="Alle"
          ></b-form-input>
        </b-form-group>

        <p class="bit-input-description mb-0 mt-3">Zugewiesen an</p>
        <b-form-select v-model="selected" :options="options" placeholder="Alle"></b-form-select>

        <b-form-group label="Takte" label-for="Takte" @submit.stop.prevent>
          <b-form-input
            id="Takte"
            size="sm"
            placeholder="Alle"
          ></b-form-input>
        </b-form-group>

        <p class="bit-input-description mb-0 mt-3">Zugewiesen Von</p>
        <b-form-select v-model="selected" :options="options" placeholder="Alle"></b-form-select>

        <b-form-group label="Status" label-for="Status" @submit.stop.prevent>
          <b-form-input
            id="Status"
            size="sm"
            placeholder="Alle"
          ></b-form-input>
        </b-form-group>

        <b-form-group label="ID(s)" label-for="ID(s)" @submit.stop.prevent>
          <b-form-input
            id="ID(s)"
            size="sm"
            placeholder="Alle"
          ></b-form-input>
        </b-form-group>

        <b-form-group label="Rechnungs-Nr." label-for="Rechnungs-Nr." @submit.stop.prevent>
          <b-form-input
            id="Rechnungs-Nr."
            size="sm"
            placeholder="Alle"
          ></b-form-input>
        </b-form-group>

        <b-row class="bit-content-inner mt-3">
          <b-col align-self="center" cols="12" sm="12" md="12" lg="6" xl="6" class="text-left p-0">
            <b-dropdown-item-button>
              <b-button pill variant="outline-danger" class="bit-botton-anfo mt-4" @click="onClick">Alle Filter löschen</b-button>
            </b-dropdown-item-button>
          </b-col>

          <b-col align-h="end" cols="12" sm="12" md="12" lg="6" xl="6" class="text-right p-0">
            <b-dropdown-item-button>
              <b-button pill variant="danger" class="bit-botton-login mt-4 align-items-right"  @click="onClick">Filter anwenden</b-button>
            </b-dropdown-item-button>
          </b-col>
        </b-row>
      </b-dropdown-form>
    </b-dropdown>
  </div>

        <div>
            <b-dropdown id="dropdown-form" no-caret align-h="end" size="lg" text="Neues Ticket" ref="dropdown" dropleft variant="danger" class="m-2 bit-dropdown-filter" >
              <template slot="button-content">Neues Ticket<img src="../assets/plus.png" alt="log" class="ml-3 bit-unlog-pic" ></template>
              <b-dropdown-form style="max-width:100%; height:70%;">

                <b-row>
                  <b-col cols="10" class="overflow-auto mt-1">
                      <h1 class="bit-login-title">Erstellen Sie ein Ticket</h1>
                  </b-col>

                  <b-col cols="2" class="overflow-auto text-right mt-1">
                    <b-dropdown-item-button>
                        <img src="../assets/cross.jpg"  alt="close" class="ml-3 bit-unlog-pic" >
                    </b-dropdown-item-button>
                  </b-col>
                 </b-row>


                <p class="mt-4 mb-4" style="color:#818188">Would you like to pop in a CD and have a better quality of life, and even self improvement? </p>
                <b-dropdown-divider></b-dropdown-divider>

                <p class="bit-input-description mb-0 mt-3">Kategorie</p>
                <b-row class="mt-2">
                  <b-col cols="3">
                    <b-form-checkbox class="mb-3">Support</b-form-checkbox></b-col>
                  <b-col cols="3">
                    <b-form-checkbox class="mb-3">Anfrage</b-form-checkbox></b-col>
                  <b-col cols="3">
                    <b-form-checkbox class="mb-3">Bestellung</b-form-checkbox></b-col>
                </b-row>

                <p class="bit-input-description mb-0 mt-3">Priorität</p>
                <b-row class="mt-2">
                <b-col cols="3">
                   <b-form-checkbox class="mb-3">Niedrig</b-form-checkbox></b-col>
                <b-col cols="3">
                   <b-form-checkbox class="mb-3">Mittel</b-form-checkbox></b-col>
                <b-col cols="3">
                   <b-form-checkbox class="mb-3">Hoch</b-form-checkbox></b-col>
                <b-col cols="3">
                   <b-form-checkbox class="mb-3">Eskalation</b-form-checkbox></b-col>
                </b-row>

                <p class="bit-input-description mb-0 mt-3">Ansprechpartner für Rückfragen</p>
                <b-form-select v-model="selected" :options="options"></b-form-select>

                <p class="bit-input-description mb-0 mt-3">Betreff</p>
                <b-form-group label="" label-for="Betreff" @submit.stop.prevent>
                  <b-form-input
                  id="Betreff"
                  size="sm"
                  placeholder="Alle"
                  ></b-form-input>
                </b-form-group>

                <p class="bit-input-description mb-0 mt-3">Beschreibung</p>
                <b-form-group label="" label-for="Beschreibung" @submit.stop.prevent>
                  <b-form-input
                  style="height:100px;"
                  id="Beschreibung"
                  size="sm"
                  ></b-form-input>
                </b-form-group>

                <b-row class="bit-content-inner mt-3">
          <b-col align-self="center" cols="12" sm="12" md="12" lg="6" xl="6" class="text-left p-0">
            <b-dropdown-item-button>
              <b-button pill variant="outline-danger" class="bit-botton-anfo mt-4"  @click="onClick">Abbrechen</b-button>
            </b-dropdown-item-button>
          </b-col>

          <b-col align-h="end" cols="12" sm="12" md="12" lg="6" xl="6" class="text-right p-0">
            <b-dropdown-item-button>
              <b-button pill variant="danger" class="bit-botton-login mt-4 align-items-right"  @click="onClick">Ticket erstellen</b-button>
           </b-dropdown-item-button>
          </b-col>
                </b-row>
      </b-dropdown-form>
     </b-dropdown>
    </div>
   </b-row>

    <b-row class="mx-auto">
    <b-table id="my-table" hover :items="items" :fields="fields" :per-page="perPage"  :current-page="currentPage"></b-table>
    </b-row>

    <b-row class="mx-auto">
        <b-col align-h="start" cols="2" class="text-left"
          style="font-weight:600;">
          <p>{{items.length}} Total</p>
        </b-col>

        <b-col align-h="midle" cols="2" class="text-center mx-auto">
          <b-pagination
          v-model="currentPage"
          :total-rows="items.length"
          :per-page="perPage"
          aria-controls="my-table"
        ></b-pagination>
        </b-col>

        <b-col align-h="end" cols="2" class="text-right"
          style="font-weight:600;">
          <p>Show: {{perPage}} </p>
        </b-col>

      </b-row>
    </b-col>
  </b-row>

</template>

<script>
export default {
    data() {
      return {
        methods: {
          onClick() {
            // Close the menu and (by passing true) return focus to the toggle button
       this.$refs.dropdown.hide(true)
        }
        },
        perPage: 14,
        currentPage: 1,
        fields: [
          {
            key: 'Datum',
            label: 'Datum',
            sortable: true
          },
          {
            key: 'zugewiesen',
            label: 'Zugewiesen an',
            sortable: true
          },
          {
            key: 'zugewiesenlight',
            label: 'Zugewiesen an',
            sortable: true
          },
          {
            key: 'identificator',
            label: 'ID',
            sortable: true
          },
          {
            key: 'Typ',
            label: 'Typ',
            sortable: true
          },
          {
            key: 'Takte',
            label: 'Takte',
            sortable: true
          },
          {
            key: 'Status',
            sortable: true
          },
          {
            key: 'Rechnungs',
            label: 'Rechnungs-Nr.',
            sortable: true,
          }
        ],
        items: [
          { isActive: true, id:1, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7125, Typ: 'Fernwartung ', Takte: 12, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:2, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7126, Typ: 'Fernwartung ', Takte: 9, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:3, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:4, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:5, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:6, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:7, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:8, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:9, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:10, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:11, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:12, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:13, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:14, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:15, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:16, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:17, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:18, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:19, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7128, Typ: 'Fernwartung ', Takte: 6, Status: 'abgerechnet', Rechnungs: 'RE 12588 '}

        ],
        selected: [], // Must be an array reference!
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option' },
          { value: { C: '3PO' }, text: 'This is an option with object value' },
          { value: 'd', text: 'This one is disabled', disabled: true }
        ]
      }
    }
  }

</script>

<style>
.dropdown-menu {
  min-width: 40rem!important;
}
@media (max-width: 992px) {
  .dropdown-menu {
    min-width: 19rem!important;
  }
}

.dropdown.b-dropdown .b-dropdown-form {

    margin-top: 1rem!important;
    font-weight: 700!important;
}
label {
    display: inline-block;
    margin-bottom: 0rem!important;
}
option {
  max-width:200px!important;
}
.custom-select {
    height: 2.0em!important;
    margin-bottom: 1rem!important;
  }

.bit-filter .btn-outline-danger{
  border-radius: 50rem !important;
}
.btn-danger {
    font-weight: 700!important;
    background-color: #aa072e!important;
    border-color: #aa072e!important;
    border-radius: 50rem !important;
}

.dropdown-item.active {
    background-color: transparent!important;
    border-color: none!important;
}
.dropdown-item:active {
    background-color: transparent!important;
    border-color: none!important;
}

.bit-top-content {
  background-image: url(../assets/city.jpg);
  background-position: center center;
  background-size: cover;
  min-height: 10vh;
}
.bit-top-content-logowhite {
  max-width: 20%;
}
.bit-plus-pic {
  height: 10px;
  width: 10px;
  margin-left: 5px;
}
.page-link {
    color: #000!important;
    background-color: #fff;
    border: none!important;
    font-weight: 600;
   }

   .page-item.active .page-link {
     box-shadow: none!important;
     outline: none!important;
     z-index: 1;
     color: #fff!important;
     background-color: #aa072e!important;
       }


</style>
