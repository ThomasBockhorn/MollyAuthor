<template>
    <div>
        <FrontEndNavbar />
        <slot></slot>
        <FrontEndFooter />
    </div>
</template>

<script>
import FrontEndNavbar from "@/Components/FrontEndNavbar/FrontEndNavbar.vue";
import FrontEndFooter from "@/Components/FrontEndFooter/FrontEndFooter.vue";

export default {
    name: "GuestLayout",
    components: {
        FrontEndNavbar,
        FrontEndFooter,
    },
};
</script>
