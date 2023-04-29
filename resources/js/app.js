require('./bootstrap');

import { createApp } from 'vue';

createApp({})
.component("api-quind", require("./components/ApiQuind.vue").default)
.mount("#app");