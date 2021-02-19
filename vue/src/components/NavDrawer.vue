<template>
    <!-- <Sidebar v-model="drawer"/> -->
    <v-navigation-drawer
      fixed
      :mini-variant.sync="mini"
      color="default"      
      app
      clipped
    >
    <!-- <v-navigation-drawer
      permanent
      expand-on-hover
      app
      absolute
      clipped
    > -->
      <v-list
          nav
          dense
        >
          <v-list-item link to='/customer'>
            <v-list-item-icon>
              <!-- <v-icon class="green--text">mdi-account-group</v-icon> -->
              <v-icon class="light-blue--text">mdi-account-multiple-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-title class="grey--text">Customer</v-list-item-title>
          </v-list-item>
          <v-list-item link to='/transaction'>
            <v-list-item-icon>
              <!-- <v-icon class="light-blue--text">mdi-briefcase</v-icon> -->
              <v-icon class="light-blue--text">mdi-credit-card-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-title class="grey--text">Transaction</v-list-item-title>
          </v-list-item>          
        </v-list>
    </v-navigation-drawer>
</template>
<script>
// import Dialog from './Dialog'
// import Sidebar from './Sidebar'
export default {
    name: 'NavDrawer',
    data () {
      return {
        // mini : false
      }
    },
    computed : {
      mini() {
        return this.$store.state.settings.miniSidebar
      }
    },
    components : {
        // Dialog,
        // Sidebar
    }
}
</script>