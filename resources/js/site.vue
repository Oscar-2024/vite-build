<script>
import { defineAsyncComponent } from "vue"

const SiteShopPage = defineAsyncComponent(
    () => import("@/site/pages/ShopPage.vue")
);

const SiteCheckoutPage = defineAsyncComponent(
    () => import("@/site/pages/CheckoutPage.vue")
);

export default {
    name: "Site",
    components: {
        SiteShopPage,
        SiteCheckoutPage,
    },
};
</script>