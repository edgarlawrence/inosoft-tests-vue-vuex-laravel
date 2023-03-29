<template lang="">
    <div>
        <div class="dropdown" v-if="buttons === 'Dropdown'">
            <button
                class="btn customs-buttons dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                {{ buttonName }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li v-for="(item, index) in items" :key="index">
                    <a class="dropdown-item" href="#">{{ item.value }}</a>
                </li>
            </ul>
        </div>

        <div class="submit-btns p-2" v-else-if="buttons === 'Submit'">
            <button type="button" class="btn submitted-buttons px-5 py-2">
                {{ buttonName }}
            </button>
        </div>

        <div class="submit-btns p-2" v-else-if="buttons === 'Draft'">
            <button type="button" class="btn btn-outline-secondary px-5 py-2">
                {{ buttonName }}
            </button>
        </div>

        <div class="submit-btns p-2" v-else-if="buttons === 'Cancel'">
            <button type="button" class="btn px-5 py-2">
                {{ buttonName }}
            </button>
        </div>

        <div v-else-if="buttons === 'PLUS'">
            <button type="button" class="btn text-white" :style="styles">
                {{ buttonName }}
            </button>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        buttons: String,
        buttonName: String,
        items: Array,
        styles: String,
    },
};
</script>
<style lang="css">
.customs-buttons {
    color: #3bceac;
}

.customs-buttons:hover {
    color: #3bceac;
}

.submitted-buttons {
    background-color: #3bceac;
    color: white;
}

.submitted-buttons:hover {
    background-color: #3bceac;
    color: white;
}
</style>
