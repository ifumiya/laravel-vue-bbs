import Vue from 'vue'
import Vuex from 'vuex';
Vue.use(Vuex);
export default new Vuex.Store({
    state: {
        count: 1,
    },
    mutations: {
        inc(state) {
            state.count += 1;
            console.log('inc');
        }
    },
    actions: {
        incAsync({commit}, {amount}) {
            console.log('action');
            console.log(amount);
            for(let i = 0 ; i < amount ; i++) {
                setTimeout(() => commit('inc'), 100 * i);
            }
        },
    },
});
