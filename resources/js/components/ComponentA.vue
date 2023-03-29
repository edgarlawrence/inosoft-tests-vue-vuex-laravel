<template lang="">
    <div>
        <div class="row p-3">
            <div class="col-12">3rd Party Instruction</div>
        </div>
        <div class="row">
            <div class="col-2">
                <Buttons
                    buttons="DropdownLogo"
                    buttonName="Logistic Instruction"
                    :items="items"
                >
                </Buttons>
            </div>
            <div class="col-10 padding-containers">
                <div
                    class="badge rounded-pill custom-badge mt-2"
                    style="margin-left: 1rem"
                >
                    Draft
                </div>
                <hr class="dropdown-divider customs-divider" />
            </div>
        </div>
        <div class="row padding-containers">
            <div class="col-2"></div>

            <div class="col-10 d-flex flex-wrap">
                <div class="col-4 p-2">
                    <Selects
                        optionDisabled="true"
                        selectLabel="Assigned Vendor"
                        v-model="selectedVendor"
                        :options-data="loadedAssignedVendor"
                        @change="handleAssignVendorChange"
                    ></Selects>
                </div>
                <div class="col-2 p-2">
                    <InputText
                        inputLabel="Attention Of"
                        :value="attentionValue"
                        v-on:update:value="updateAttention"
                        :textString="true"
                        placeholder="Insert Your Attention"
                    />
                </div>
                <div class="col-2 p-2">
                    <InputText
                        inputLabel="Quotation Of"
                        :value="quotationValue"
                        v-on:update:value="updateQuotation"
                        :textString="true"
                        placeholder="Insert Your Quotation"
                    />
                </div>
                <div class="col-2 p-2">
                    <Selects
                        optionDisabled="true"
                        selectLabel="Invoice To"
                        v-model="selectedInvoiceTo"
                        :options-data="loadedInvoiceTo"
                        @change="handleInvoiceToChange"
                    ></Selects>
                </div>
                <div class="col-10 p-2">
                    <InputText
                        inputLabel="Vendor Address"
                        :value="addressValue"
                        v-on:update:value="updateAddress"
                        :textString="true"
                        placeholder="Insert Your Address"
                    />
                </div>
                <div class="col-2 custom-container">
                    <div class="col-12 min-margin">
                        <Selects
                            optionDisabled="true"
                            selectLabel="Customer - Contract"
                            v-model="selectedCustomerContract"
                            :options-data="loadedCustomerContract"
                            @change="handleCustomerContractChange"
                        ></Selects>
                    </div>
                    <div class="col-12 plus-margin">
                        <Selects
                            optionDisabled="true"
                            selectLabel="Customer PO No."
                            v-model="selectedCustomerPoNo"
                            :options-data="loadedCustomerPoNo"
                            @change="handleCustomerPoNoChange"
                        ></Selects>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Buttons from "../components/Buttons.vue";
import Selects from "../components/Selects.vue";
import InputText from "../components/InputText.vue";
export default {
    components: {
        Selects,
        Buttons,
        InputText,
    },
    data() {
        return {
            selectedVendor: "PJ Manullang",
            selectedInvoiceTo: "Select an Option",
            selectedCustomerContract: "Select an Option",
            selectedCustomerPoNo: "Select an Option",
            attentionValue: "John Doe",
            quotationValue: "ABC-123-01",
            addressValue:
                "Marubeni-Itochu Tublars Asia Pte Ltd (2 Shenton Way, SGX Center 1, #07-01 (S) (068804)",
            items: [
                {
                    id: 1,
                    value: "Logistic Instruction",
                },
                {
                    id: 2,
                    value: "Shipping Instruction",
                },
            ],
        };
    },
    computed: {
        loadedAssignedVendor() {
            return this.$store.getters.fetchAssignedVendor;
        },
        loadedInvoiceTo() {
            return this.$store.getters.fetchInvoiceTo;
        },
        loadedCustomerContract() {
            return this.$store.getters.fetchCustomerContract;
        },
        loadedCustomerPoNo() {
            return this.$store.getters.fetchCustomerPoNo;
        },
    },
    mounted() {
        this.$store.dispatch("getAssignedVendor");
        this.$store.dispatch("getInvoiceTo");
        this.$store.dispatch("getCustomerContract");
        this.$store.dispatch("getCustomerPoNo");
    },
    methods: {
        handleAssignVendorChange(selectedValue) {
            this.selectedVendor = selectedValue;
        },
        handleInvoiceToChange(selectedValue) {
            this.selectedInvoiceTo = selectedValue;
        },
        handleCustomerContractChange(selectedValue) {
            this.selectedCustomerContract = selectedValue;
        },
        handleCustomerPoNoChange(selectedValue) {
            this.selectedCustomerPoNo = selectedValue;
        },
        updateAttention(newValue) {
            this.attentionValue = newValue;
        },
        updateQuotation(newValue) {
            this.quotationValue = newValue;
        },
        updateAddress(newValue) {
            this.addressValue = newValue;
        },
    },
};
</script>
<style lang="css">
.custom-badge {
    background-color: #e5e5e5;
    color: black;
    padding-left: 3rem;
    padding-right: 3rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.custom-container {
    margin-top: -3.5rem;
}

.min-margin {
    margin-top: -1rem;
}

.plus-margin {
    margin-top: 1.1rem;
}

.padding-containers {
    padding-left: 2rem;
}

.customs-divider {
    margin-left: auto;
    margin-right: auto;
    width: 59rem;
    color: lightgray;
}
</style>
