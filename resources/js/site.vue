<script>
import { defineAsyncComponent } from "vue"

const SiteShopPage = defineAsyncComponent(
    source: () => import("@site/pages/ShopPage.vue")
);

const SiteCheckoutPage = defineAsyncComponent(
    source: () => import("@site/pages/CheckoutPage.vue")
);

export default {
    name: "Site",
    components: {
        SiteShopPage,
        SiteCheckoutPage,
    },
};
</script>