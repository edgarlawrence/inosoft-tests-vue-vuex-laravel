<template>
    <div>
        <input
            type="number"
            class="form-control"
            v-bind:value="value"
            v-on:input="$emit('update:value', $event.target.value)"
            :placeholder="placeholder"
            disabled
        />
    </div>
</template>

<script>
export default {
    props: {
        value: {
            type: Number,
        },
        placeholder: String,
    },
};
</script>
