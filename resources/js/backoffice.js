import './bootstrap';
import { createApp } from 'vue';
import Backoffice from "@/Backoffice.vue";

const app = createApp(Backoffice);
app.mount('#backoffice');