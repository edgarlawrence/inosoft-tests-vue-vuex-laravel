import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        data: [],
        currency: [],
        chargeTo: [],
        assignedVendor: [],
        invoiceTo: [],
        customerContract: [],
        customerPoNo: [],
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
        setAssignedVendor(state, payload) {
            state.assignedVendor = payload;
        },
        setInvoiceTo(state, payload) {
            state.invoiceTo = payload;
        },
        setCustomerContract(state, payload) {
            state.customerContract = payload;
        },
        setCustomerPoNo(state, payload) {
            state.customerPoNo = payload;
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
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async getAssignedVendor(context) {
            await axios
                .get("http://127.0.0.1:8000/api/assignedvendor")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setAssignedVendor",
                        JSON.parse(JSON.stringify(response))
                    );
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async getInvoiceTo(context) {
            await axios
                .get("http://127.0.0.1:8000/api/invoiceto")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setInvoiceTo",
                        JSON.parse(JSON.stringify(response))
                    );
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async getCustomerContract(context) {
            await axios
                .get("http://127.0.0.1:8000/api/customercontracts")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setCustomerContract",
                        JSON.parse(JSON.stringify(response))
                    );
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async getCustomerPoNo(context) {
            await axios
                .get("http://127.0.0.1:8000/api/customerpono")
                .then((res) => {
                    const response = res.data;
                    context.commit(
                        "setCustomerPoNo",
                        JSON.parse(JSON.stringify(response))
                    );
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
        fetchAssignedVendor: (state) => state.assignedVendor,
        fetchInvoiceTo: (state) => state.invoiceTo,
        fetchCustomerContract: (state) => state.customerContract,
        fetchCustomerPoNo: (state) => state.customerPoNo,
    },
});

export default store;
