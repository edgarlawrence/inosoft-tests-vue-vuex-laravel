<template>
    <div>
        {{ inputLabel }}
        <input
            v-if="textString === true"
            type="text"
            class="form-control"
            v-bind:value="value"
            v-on:input="$emit('update:value', $event.target.value)"
            :placeholder="placeholder"
        />
        <input
            v-else
            type="number"
            class="form-control"
            v-bind:value="value"
            v-on:input="$emit('update:value', $event.target.value)"
            :placeholder="placeholder"
        />
    </div>
</template>

<script>
export default {
    props: {
        value: {
            type: String,
        },
        placeholder: String,
        textString: Boolean,
        inputLabel: String,
    },
};
</script>
