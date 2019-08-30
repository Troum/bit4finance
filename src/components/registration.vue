<template>
  <b-row class="mx-auto text-center justify-content-center align-items-center" align-v="center">
    <b-col align-self="center" cols="12" sm="12" md="12" lg="6" xl="6" class="bit-left-content">

      <img src="../assets/logowhite.png" alt="logo" class="bit-left-content-logowhite" >

    </b-col>
    <b-col cols="12" sm="12" md="12" lg="6" xl="6" class="bit-right-content text-left">
      <b-row>
        <h1 class="bit-login-title">Willkommen bei bit4Finance</h1>
        <p class="mt-4 mb-4" style="color:#818188">Bitte nutzen Sie Ihre - von uns übermittelte - Kunden-PIN und Kunden-Nr., um ein Ticket für den EDV-Helpdesk zu erstellen oder einzusehen.</p>
      </b-row>
      <b-row>
        <b-form @submit.prevent="submit" class="w-100">
         <b-form-group>
           <p class="bit-input-description mb-0 mt-3">Ihre Login Mail Adresse oder PIN</p>
           <b-form-input
              v-model="login"
              id="input-live"
              :state="loginState"
           ></b-form-input>
        </b-form-group>

         <b-form-group>
           <p class="bit-input-description mb-0 mt-3">Ihr Passwort</p>
           <b-form-input
              id="input-live"
              v-model="password"
              :state="passwordState"
           ></b-form-input>
        </b-form-group>


         <b-form-group>
           <b-form-invalid-feedback id="input-live-feedback">
             Geben Sie mindestens 3 Symbole ein
           </b-form-invalid-feedback>
         </b-form-group>

         <b-form-group class="d-flex justify-content-between">
            <b-row>
               <b-col align-h="start" cols="6" sm="6" md="6" lg="6" xl="6" class="text-left p-0">
                 <b-button pill variant="outline-danger" class="bit-botton-anfo mt-4">
                   Login anfodern
                 </b-button>
              </b-col>

              <b-col align-h="end" cols="6" sm="6" md="6" lg="6" xl="6" class="text-right p-0">
             <b-button pill type="submit" variant="danger" class="bit-botton-login mt-4">
               Login
             </b-button>
            </b-col>
          </b-row>
         </b-form-group>

       </b-form>

      </b-row>
    </b-col>
  </b-row>
</template>

<script>

export default {
    computed: {
      passwordState() {
        return this.password.length > 2 ? true : false
      },
      loginState() {
        return this.login.length > 0 ? true : false
      }
    },
    data() {
      return {
        password: '',
        login: ''
      }
    },
    methods: {
      submit () {
        if ( this.passwordState && this.loginState) {
          this.$router.push({name: 'ticket'})
        } else {
          console.log('not ok');
        }
      }

    }
  }

</script>

<style>
.was-validated .form-control:invalid, .form-control.is-invalid {
    border-color: #ced4da!important;
    background-image: none!important;
  }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #28a745!important;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)!important;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25)!important;
}
.bit-left-content {
  background-image: url(../assets/city.jpg);
  background-position: center center;
  background-size: cover;
  min-height: 100vh;
}
@media (max-width: 992px) {
  .bit-left-content {
      min-height: 20vh!important;}

  .bit-left-content-logowhite {
      margin-top: 7%!important;}

  .bit-bit-login-title {
    padding-top: 7%;
  }
}
@media (min-width: 993px) {
  .left-content {

  }
}

.bit-left-content-logowhite {
  width: 65%;
  margin-top: 45%;
}
.bit-right-content {
 padding-left: 10%!important;
 padding-right: 17%!important;
}

.bit-botton-login  {
padding-left: 30%!important;
padding-right: 30%!important;
background-color: #aa072e!important;
font-weight: 700!important;
}

.bit-botton-anfo  {
  padding-left: 10%!important;
  color: #aa072e!important;
  font-weight: 700!important;
  white-space: nowrap;
  background-color: transparent!important;
  border-radius: 50rem !important;
}

.btn-outline-danger {
  color: #aa072e!important;
  border-color: #fff!important;
}
.btn-outline-danger:hover {
    color: #fff!important;
    background-color: #aa072e!important;
    border-color: #aa072e!important;
 }
 .bit-input-description {
   font-weight: 700;
 }
 .bit-login-title {
 font-weight: 900;
 }
</style>
