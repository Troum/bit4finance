<template>

  <b-row class="mx-auto">
    <b-col cols="12" class="bit-top-content">
        <img src="../assets/logowhite.png" alt="logo" class="bit-top-content-logowhite" >
            <b-button pill @click="unlogin" variant="outline-danger" class="bit-unlog-button mt-4"><img src="../assets/power.png" alt="log" class="bit-unlog-pic" >Ausloggen</b-button>
    </b-col>



<b-row class="pl-5 pr-5">
    <!-- дропдаун фильтр 1 -->


    <b-col cols="12" class="bit-content-inner text-right mt-3 mb-5">

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

      <b-form-group

         label-for="sortBySelect"
         class="mb-0"
       >
          <b-input-group >
            <b-form-select v-model="sortBy" id="sortBySelect" :options="sortOptions" class="w-75">
            <option slot="first" value="">Alle</option>
            </b-form-select>
          </b-input-group>
        </b-form-group>

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


    </b-col>

  <b-container fluid>
    <!-- Main table element -->
    <b-table
      show-empty
      small
      stacked="md"
      :items="items"
      :fields="fields"
      :current-page="currentPage"
      :per-page="perPage"
      :filter="filter"
      :filterIncludedFields="filterOn"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      :sort-direction="sortDirection"
      @filtered="onFiltered"
    >

      <template slot="actions" slot-scope="row">
        <b-button class="bit_hider_shower" v-html="row.detailsShowing ? imgup : img" size="sm" @click="row.toggleDetails"></b-button>
      </template>

      <template slot="row-details" slot-scope="row">
        <b-card>
          <b-row class="bitbox">
            <b-col cols="8" v-for="issue in issues" class="text-left">
              <p style="font-weight: 800; font-size: 2rem;">
              {{ issue.issuename }}
              </p>
              <p>
              {{ issue.description }}
              </p>
            </b-col>

            <b-col cols="4" class="bitdetailbox whitepimpochka">
                <b-row v-for="detail in details">
                  <b-col  cols="6" class="text-left pimpochka">
                    <p style="font-weight: 600;">{{ detail.naming }}</p>
                  </b-col>
                    <b-col cols="6" class="text-right">
                    <p style="font-weight: 600;">{{ detail.time }}</p>
                  </b-col>
                  <b-col cols="12" class="text-left">
                    <p style="color:#a2a2a2; font-size:14px;">{{ detail.message }}</p>
                  </b-col>
                </b-row>
              </b-col>
          </b-row>
        </b-card>
      </template>
    </b-table>

    <b-row>
      <b-col align-h="start" cols="2" class="text-left ml-3"
        style="font-weight:600;">
        <p>{{items.length}} Total</p>
      </b-col>

      <b-col cols="4" align-h="midle" class="text-center mx-auto">
        <b-pagination
        v-model="currentPage"
        :total-rows="totalRows"
        :per-page="perPage"
        align="fill"
        size="sm"
        class="my-0"
      ></b-pagination>
      </b-col>

    <b-col cols="1"  align-h="end" class="text-right mr-4">
      <b-row style="font-weight:600; display:-webkit-box;">
        <p>Show:</p>
          <b-form-select
          class="bitshowselector"
          v-model="perPage"
          id="perPageSelect"
          size="sm"
          :options="pageOptions"
          ></b-form-select>
        </b-row>
    </b-col>
  </b-row>

    <!-- Info modal -->
    <b-modal :id="infoModal.id" :title="infoModal.title" ok-only @hide="resetInfoModal">
      <pre>{{ infoModal.content }}</pre>
    </b-modal>
  </b-container>
</b-row>
</b-row>
</template>

<script>
  export default {
    data() {
     let src = require('../assets/dropdown.png')
     let srcup = require('../assets/dropup.png')
      return {
        imgup: `<img src="${srcup}" alt="" width="30px" height="15px">`,
        img: `<img src="${src}" alt="" width="16px" height="8px">`,

        issues: [
          {
            issuename: 'Gitlab Server nicht erreichbar',
            description: 'Überprüfung Zugriff per HyperV Manager, Neustart, Problem Temp Partition',
          }
          ],
          details: [
          {
            naming: 'Aasiya Jayavant',
            time: '02. Jun 2019',
            message: 'If you are applying for a job abroad (particularly in Europe or South America), a Motivation Letter For Work Abroad takes the place of a Cover Letter.'
          },
          {
            naming: 'Ramzam Cobain',
            time: '03. Jun 2019',
            message: 'If you are applying for a job abroad (particularly in Europe or South America), a Motivation Letter For Work Abroad takes the place of a Cover Letter.'
          }
        ],

          items: [
          { isActive: true, id:1, Datum: '12 Jul 2019', zugewiesen: 'Daniel Kluge', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7125, Typ: 'Fernwartung ', Takte: 12, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:2, Datum: '12 Jul 2019', zugewiesen: 'David Bowie', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7126, Typ: 'Fernwartung ', Takte: 9, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:3, Datum: '12 Jul 2019', zugewiesen: 'Kurt Cobain', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:4, Datum: '12 Jul 2019', zugewiesen: 'Albert Einstein', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
          { isActive: true, id:5, Datum: '12 Jul 2019', zugewiesen: 'Stephan Hoffman', zugewiesenlight: 'Aasiya Jayavant ', identificator: 7127, Typ: 'Fernwartung ', Takte: 3, Status: 'abgerechnet', Rechnungs: 'RE 12588 '},
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
        fields: [
                  { key: 'Datum', label: 'Datum', sortable: true},
                  { key: 'zugewiesen', label: 'zugewiesen', sortable: true},
                  { key: 'zugewiesenlight', label: 'zugewiesenlight', sortable: true},
                  { key: 'identificator', label: 'ID', sortable: true},
                  { key: 'Typ', label: 'Typ', sortable: true},
                  { key: 'Takte', label: 'Takte', sortable: true},
                  { key: 'Status', label: 'Status', sortable: true},
                  { key: 'Rechnungs', label: 'Rechnungs', sortable: true},
                  { key: 'actions', label: '' }
                ],
        totalRows: 1,
        currentPage: 1,
        perPage: 5,
        pageOptions: [5, 10, 15],
        sortBy: '',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        filterOn: [],
        infoModal: {
          id: 'info-modal',
          title: '',
          content: ''
        }
      }
    },
    computed: {
      sortOptions() {
        // Create an options list from our fields
        return this.items
          .filter(f => f.isActive)
          .map(f => {
            return { text: f.zugewiesen, value: f.zugewiesen }
          })
      }
    },
    mounted() {
      // Set the initial number of items
      this.totalRows = this.items.length
    },
    methods: {
      info(item, index, button) {
        this.infoModal.title = `Row index: ${index}`
        this.infoModal.content = JSON.stringify(item, null, 2)
        this.$root.$emit('bv::show::modal', this.infoModal.id, button)
      },
      resetInfoModal() {
        this.infoModal.title = ''
        this.infoModal.content = ''
      },
      onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
      unlogin() {
        this.$router.push({name: 'registration'})
      },
    }
  }
</script>

<style>
.card {
  border: 3px solid!important;
  border-color: #b21f2d!important;
  border-top-left-radius: 3px;
  border-right: none!important;
  border-top: none!important;
  border-bottom: none!important;
  border-radius: 0!important;

}
.table-sm th, .table-sm td {
    padding-left: 0rem!important;
}
.bitdetailbox{
  border: 1px solid!important;
  border-color: #b21f2d!important;
  border-right: none!important;
  border-top: none!important;
  border-bottom: none!important;
  border-radius: 0!important;

}
.pimpochka:before {
  content: url('../assets/pim.png');
  width: 15px;
  height: 15px;
  padding: 7.5px;
  position: absolute;
  left: -26px;
  top: -9px;
}
.whitepimpochka:after {
  content: url('../assets/white.png');
  width: 10px;
  height: 10px;
  padding: 7.5px;
  position: absolute;
  left: -12px;
  top: -19px;
}


.bit_hider_shower {
  background-color:transparent!important;
  border-color:transparent!important;
  box-shadow: none!important;
}
.bit_filters_block {
  justify-content: right;

  }
.custom-select {

  font-weight: 800!important;
}

.custom-select:focus {
    border-color: #aa072e!important;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
    box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
}

table {
    border-color: none!important;
}

th:focus {
    outline: none!important;

}


.table.b-table > thead > tr > th[aria-sort]::before, .table.b-table > tfoot > tr > th[aria-sort]::before {
  content: url(../assets/sort.svg)!important;
  opacity: 1!important;
  float: left!important;
  margin-left: 2em!important;
}

li:focus {
      outline: none!important;
}

option:focus {
    outline: none!important;
}


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

button:focus {
    outline: none!important;
             }

.dropdown.b-dropdown .b-dropdown-form:focus {
    outline: none!important;
             }

 .form-control:focus {
   border-color: #aa072e!important;
   -webkit-box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
   box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
    box-shadow: 0 0 0 0.2rem rgba(170, 7, 46, 0.25)!important;
}

.page-link:hover {
    background-color: rgba(170, 7, 46, 0.25)!important;
    border-color: rgba(170, 7, 46, 0.25)!important;
}

.row {
margin-right: auto!important;
margin-left: auto!important;
}

.bitshowselector {
    color: #000!important;
    border: 1px solid #fff!important;

}
.custom-select-sm {
    padding-top: 0!important;
  }

</style>
