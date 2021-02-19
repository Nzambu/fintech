import Vue from 'vue';
import Vuex from 'vuex';

import {auth} from './AuthModule';
import {profile} from './ProfileModule';
import {settings} from './SettingModule';
import {customer} from './CustomerModule';
import {transaction} from './TransactionModule';

import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex);

export default new Vuex.Store({
  plugins : [createPersistedState({ storage: window.sessionStorage })],
  state : {
  },
  mutations : {
  },
  actions : {
  },
  modules : {
    auth,
    profile,
    settings,
    customer,
    transaction,
  }
});
