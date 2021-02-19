<template>
  <div>
    <v-app-bar app color="light" clipped-left>
      <v-app-bar-nav-icon @click.stop="miniSidebar"></v-app-bar-nav-icon>
      <v-row>
          <v-col lg="4">
            <v-list-item One-line>
                <v-list-item-content>
                    <v-list-item-subtitle>
                      Home <v-icon>mdi-chevron-right</v-icon> {{ location }}
                    </v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>         
          </v-col>
      </v-row>
      <v-spacer></v-spacer>
      <v-btn icon class="mr-1">
        <Dialog/>
      </v-btn>
    </v-app-bar>
  </div>  
</template>
<script>
import Dialog from './Dialog'

export default {
    name: 'AppBar',
    propertyName : '',
    data () {
      return {
        mini : false,
        property : ''
      }
    },
    computed : {
      location() {
        return this.$route.meta.name
      }
    },
    created()  {
      this.$nextTick(() => {
        this.handleGetCustomers()
        this.handleGetTransactions()
      })
    },
    components : {
        Dialog,
    },
    methods : {
      
      /**
       * Set mini sidebar
       */
      miniSidebar() {
        this.mini = !this.mini
        this.$store.dispatch('settings/miniSidebar', this.mini).then(
          set => {
            if(set === true) {
               this.$store.state.settings.miniSidebar
            }
          }
        )
      },

      /**
       * handle get a list of customers
       */
      handleGetCustomers()
      {
        return this.$store.dispatch('customer/list')
      },

      /**
       * handle get a list of transactions
       */
      handleGetTransactions()
      {
        return this.$store.dispatch('transaction/list')
      },
      
     
    }
}
</script>