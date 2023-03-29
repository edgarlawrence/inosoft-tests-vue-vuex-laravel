import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        data: [],
        currency: [],
        chargeTo: [],
    },
    mutations: {
        setData(state, payload) {
            state.data = payload;
        },
        setCurrency(state, payload) {
            state.currency = payload;
        },
        setChargeTo(state, payload) {
            state.chargeTo = payload;
        },
        increment(state) {
            state.count++;
        },
        SET_UOM(state, payload) {
            state.uom = payload;
        },
    },
    actions: {
        async getData(context) {
            await axios
                .get("http://127.0.0.1:8000/api/uom")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setData",
                        JSON.parse(JSON.stringify(response))
                    );
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        async getCurrency(context) {
            await axios
                .get("http://127.0.0.1:8000/api/currency")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setCurrency",
                        JSON.parse(JSON.stringify(response))
                    );
                    console.log("currency", response);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async getChargeTo(context) {
            await axios
                .get("http://127.0.0.1:8000/api/chargeto")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setChargeTo",
                        JSON.parse(JSON.stringify(response))
                    );
                    console.log("currency", response);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },

    getters: {
        fetchData: (state) => state.data,
        fetchCurrency: (state) => state.currency,
        fetchChargeTo: (state) => state.chargeTo,
    },
});

export default store;
