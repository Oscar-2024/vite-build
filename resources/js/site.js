import './bootstrap';
import { createApp } from 'vue';
import Site from "@/Site.vue";

const app = createApp(Site);
app.mount('#site');