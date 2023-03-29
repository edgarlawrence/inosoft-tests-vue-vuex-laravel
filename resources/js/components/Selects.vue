<template>
    <div class="custom-select">
        {{ selectLabel }}
        <select
            class="form-control form-select"
            v-model="selectedOption"
            @change="$emit('change', selectedOption)"
        >
            <option v-if="optionDisabled">Select an Option</option>
            <option
                class="form-control"
                v-for="option in options"
                :key="option.id"
                :value="option.value"
            >
                {{ option.value }}
            </option>
        </select>
    </div>
</template>

<script>
export default {
    props: {
        optionsData: {
            type: Array,
            required: true,
        },
        value: {
            type: String,
            required: false,
        },
        selectLabel: String,
        optionDisabled: true,
    },
    data() {
        return {
            selectedOption: this.value || null,
        };
    },
    computed: {
        options() {
            return this.optionsData.map((option) => {
                return {
                    value: option.value,
                };
            });
        },
    },
};
</script>
