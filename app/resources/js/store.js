import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';
Vue.use(Vuex);

export default new Vuex.Store({
    strict: true,
    state: {
        threadPage: 1,
        threadPagesCount: 10,
        threads: {},
    },
    mutations: {
        setThreads(state, threads) {
            state.threads = threads;
        },
        insertThreads(state, threads) {
            state.threads = [...threads, ...state.threads];
        },
        setThreadPage(state, threadPage) {
            state.threadPage = threadPage;
        },
        setThreadPagesCount(state, threadPagesCount) {
            state.threadPagesCount = threadPagesCount;
        },
    },
    actions: {
        async selectThreadPage({commit, state}, page) {
            const response = await Axios.get('/api/threads/', {
                params: { page }
            });
            const pageCount = response.data.last_page;
            const currentPage = response.data.current_page;
            const threads = response.data.data;
            commit('setThreads', threads);
            if (state.threadPage !== currentPage) {
                commit('setThreadPage', currentPage);
            }
            if (state.threadPagesCount !== pageCount) {
                commit('setThreadPagesCount', pageCount);
            }
        },
        async postThread({commit, state}, thread)
        {
            const response = await Axios.post('/api/threads/', thread);
            commit('insertThreads', [response.data]);
        }
    },
});
