

<v-app id="app">
    <v-card>
    <br>
    <h1 class="page-title page-title-register" >
        Register
    </h1>
    <h4 class="page-title page-sub-title-register">
        Already registered? Click <a href="/login">here</a> to login.
    </h4>
    <br>

<p class="page-text">
</p>
</v-card>
  <v-form v-model="valid">
    <v-container>
      <v-layout>
          
        <v-flex
          xs12
          md4
        >
          <v-text-field
            v-model="firstname"
            :rules="nameRules"
            :counter="10"
            label="First name"
            required
          ></v-text-field>
        </v-flex>

        <v-flex
          xs12
          md4
        >
          <v-text-field
            v-model="lastname"
            :rules="nameRules"
            :counter="10"
            label="Last name"
            required
          ></v-text-field>
        </v-flex>

        <v-flex
          xs12
          md4
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>
        </v-flex>
      </v-layout>
    </v-container>
  </v-form>
</v-app>