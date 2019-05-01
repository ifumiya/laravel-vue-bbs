import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        count: 1,
        threadPage: 1,
        threadPagesCount: 10,
        threads: {},
    },
    mutations: {
        inc(state) {
            state.count += 1;
            console.log('inc');
        },
        setThreads(state, threads) {
            state.threads = threads;
        },
        setThreadPage(state, threadPage) {
            state.threadPage = threadPage;
        },
    },
    actions: {
        incAsync({commit}, {amount}) {
            console.log('action');
            console.log(amount);
            for(let i = 0 ; i < amount ; i++) {
                setTimeout(() => commit('inc'), 100 * i);
            }
        },
        selectThreadPage({commit}, page) {
            Axios.get('/api/threads/', {
                params: { page }
            })
            .then(response => {
                console.log(response);
            });
        }
    },
});
