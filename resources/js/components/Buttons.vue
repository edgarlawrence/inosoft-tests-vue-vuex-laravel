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

        <div class="dropdown" v-if="buttons === 'DropdownLogo'">
            <button
                class="btn customs-buttons dropdown-toggle d-flex align-items-center"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                <div class="d-flex align-items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-truck mx-1"
                        viewBox="0 0 16 16"
                    >
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                        />
                    </svg>
                    <div class="mx-2">
                        {{ buttonName }}
                    </div>
                </div>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li
                    v-for="(item, index) in items"
                    :key="index"
                    class="d-flex align-items-center p-2"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-truck"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                            />
                        </svg>
                    </div>
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
    background-color: #fbfbfb;
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
