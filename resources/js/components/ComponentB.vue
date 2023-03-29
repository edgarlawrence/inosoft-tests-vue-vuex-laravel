<template lang="">
    <div>
        <Buttons buttons="Dropdown" buttonName="Cost Detail" :items="items">
        </Buttons>
        <table class="table table-borderless">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">UOM</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Discount (%)</th>
                    <th scope="col">VAT (%)</th>
                    <th scope="col"></th>
                    <th scope="col">Currency</th>
                    <th scope="col">VAT Amount</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Total</th>
                    <th scope="col">Charge To</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">
                        <InputText
                            :value="myValue"
                            v-on:update:value="updateMyValue"
                            :textString="true"
                            placeholder="Description"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="qty"
                            v-on:update:value="updateMyQty"
                            :textString="false"
                            placeholder="Qty"
                        />
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedValue"
                            :options-data="loadedUOM"
                            @change="handleChange"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <InputText
                            :value="unit"
                            v-on:update:value="updateMyUnit"
                            :textString="false"
                            placeholder="Unit Price"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="discount"
                            v-on:update:value="updateMyDiscount"
                            :textString="false"
                            placeholder="0"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="vat"
                            v-on:update:value="updateMyVAT"
                            :textString="false"
                            placeholder="0"
                        />
                    </td>
                    <td scope="col">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-arrow-right mt-2"
                            viewBox="0 0 16 16"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                            />
                        </svg>
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedCurrency"
                            :options-data="loadedCurrency"
                            @change="handleChangeCurrency"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <InputText
                            :value="vatAmount"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="subTotal"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="totals"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedChargeTo"
                            :options-data="loadedChargeTo"
                            @change="handleChargeTo"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <Buttons buttons="Dropdown" buttonName="..." />
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td scope="col">
                        <InputText
                            :value="myValue2"
                            v-on:update:value="updateMyValue2"
                            :textString="true"
                            placeholder="Description"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="qty2"
                            v-on:update:value="updateMyQty2"
                            :textString="false"
                            placeholder="Qty"
                        />
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedValue2"
                            :options-data="loadedUOM"
                            @change="handleChange2"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <InputText
                            :value="unit2"
                            v-on:update:value="updateMyUnit2"
                            :textString="false"
                            placeholder="Unit Price"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="discount2"
                            v-on:update:value="updateMyDiscount2"
                            :textString="false"
                            placeholder="0"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="vat2"
                            v-on:update:value="updateMyVAT2"
                            :textString="false"
                            placeholder="0"
                        />
                    </td>
                    <td scope="col">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-arrow-right mt-2"
                            viewBox="0 0 16 16"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                            />
                        </svg>
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedCurrency2"
                            :options-data="loadedCurrency"
                            @change="handleChangeCurrency2"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <InputText
                            :value="vatAmount2"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="subTotal2"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <InputText
                            :value="totals2"
                            :textString="false"
                            placeholder="0.00"
                        />
                    </td>
                    <td scope="col">
                        <Selects
                            v-model="selectedChargeTo2"
                            :options-data="loadedChargeTo"
                            @change="handleChargeTo2"
                        ></Selects>
                    </td>
                    <td scope="col">
                        <Buttons buttons="Dropdown" buttonName="..." />
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td scope="col" class="d-flex">
                        <p style="font-size: 15px" class="pt-2">
                            Exchange Rate 1 USD =
                        </p>
                    </td>
                    <td scope="col">
                        <InputTextView
                            :value="aed"
                            v-on:update:value="updateCurrencies"
                            placeholder="3.6725"
                        />
                    </td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col">
                        <p style="font-size: 10px" class="pt-2">AED in Total</p>
                    </td>
                    <td scope="col">
                        {{ vatAmountTotal }}
                    </td>
                    <td scope="col">
                        {{ subTotalAmount }}
                    </td>
                    <td scope="col">
                        {{ totalAmount }}
                    </td>
                    <td scope="col"></td>
                    <td scope="col">
                        <Buttons
                            buttons="PLUS"
                            buttonName="+"
                            style="
                                background-color: #3bceac;
                                text-align: center;
                            "
                        />
                    </td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col">
                        <p style="font-size: 10px" class="pt-2">USD in Total</p>
                    </td>
                    <td scope="col">
                        {{ vatAmountTotal }}
                    </td>
                    <td scope="col">
                        {{ subTotalAmount }}
                    </td>
                    <td scope="col">
                        {{ totalAmount }}
                    </td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import InputText from "./InputText.vue";
import InputTextView from "./InputTextView.vue";
import Selects from "./Selects.vue";
import Buttons from "./Buttons.vue";

export default {
    name: "ComponentB",
    data() {
        return {
            dataLoop: [],
            myValue: "",
            myValue2: "",
            qty: "",
            qty2: "",
            selectedValue: "SHP",
            selectedValue2: "EHB",
            selectedCurrency: "USD",
            selectedCurrency2: "AED",
            vatAmount: "",
            vatAmount2: "",
            subTotal: "",
            subTotal2: "",
            unit: "",
            unit2: "",
            discount: "",
            discount2: "",
            totals: "",
            totals2: "",
            aed: 3.6725,
            vat: "",
            vat2: "",
            vatAmountTotal: "0.00",
            subTotalAmount: "0.00",
            totalAmount: "0.00",
            selectedChargeTo: "Select an Option",
            selectedChargeTo2: "Select an Option",
            items: [
                { id: 1, value: "Cost Detail" },
                { id: 2, value: "Shipping Detail" },
            ],
        };
    },
    methods: {
        updateMyValue(newValue) {
            this.myValue = newValue;
        },
        updateMyValue2(newValue) {
            this.myValue2 = newValue;
        },
        updateMyQty(newValue) {
            this.qty = newValue;
        },
        updateMyQty2(newValue) {
            this.qty2 = newValue;
        },
        updateMyUnit(newValue) {
            this.unit = newValue;
        },
        updateMyUnit2(newValue) {
            this.unit2 = newValue;
        },
        updateMyDiscount(newValue) {
            this.discount = newValue;
        },
        updateMyDiscount2(newValue) {
            this.discount2 = newValue;
        },
        updateMyVAT(newValue) {
            this.vat = newValue;
        },
        updateMyVAT2(newValue) {
            this.vat2 = newValue;
        },
        handleChange(selectedValue) {
            this.selectedValue = selectedValue;
        },
        handleChange2(selectedValue) {
            this.selectedValue2 = selectedValue;
        },
        handleChangeCurrency(selectedValue) {
            this.selectedCurrency = selectedValue;
        },
        handleChangeCurrency2(selectedValue) {
            this.selectedCurrency2 = selectedValue;
        },
        handleChargeTo(selectedValue) {
            this.selectedChargeTo = selectedValue;
        },
        handleChargeTo2(selectedValue) {
            this.selectedChargeTo2 = selectedValue;
        },
        updateCurrencies(newValue) {
            this.aed = newValue;
        },
    },
    mounted() {
        this.$store.dispatch("getData");
        this.$store.dispatch("getCurrency");
        this.$store.dispatch("getChargeTo");
    },
    computed: {
        loadedUOM() {
            return this.$store.getters.fetchData;
        },
        loadedCurrency() {
            return this.$store.getters.fetchCurrency;
        },
        loadedChargeTo() {
            return this.$store.getters.fetchChargeTo;
        },
    },
    components: {
        InputText,
        Selects,
        Buttons,
        InputTextView,
    },
};
</script>
<style lang=""></style>
