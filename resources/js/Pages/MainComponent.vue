<template lang="">
    <div>
        <componenta-component> </componenta-component>
        <componentb-component> </componentb-component>
        <div class="d-flex justify-content-end">
            <Buttons buttons="Cancel" buttonName="Cancel"> </Buttons>
            <Buttons buttons="Draft" buttonName="Save as Draft"> </Buttons>
            <Buttons buttons="Submit" buttonName="Submit"> </Buttons>
        </div>
    </div>
</template>
<script>
import Buttons from "../components/Buttons.vue";
export default {
    components: {
        Buttons,
    },
};
</script>
<style lang=""></style>
