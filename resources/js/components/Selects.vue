<template>
    <div class="custom-select">
        <select
            class="form-control"
            v-model="selectedOption"
            @change="$emit('change', selectedOption)"
        >
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
