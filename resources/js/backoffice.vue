<script>
import { defineAsyncComponent } from "vue"

const BackofficeLoginPage = defineAsyncComponent(
    () => import("@/backoffice/pages/LoginPage.vue")
);

export default {
    name: "Backoffice",
    components: {
        BackofficeLoginPage,
    },
};
</script>