<template>
    <div>
        <FrontEndNavbar />
        <div class="pb-20 pt-20">
            <slot></slot>
        </div>
        <FrontEndFooter />
    </div>
</template>

<script>
import FrontEndNavbar from "@/Components/FrontEndComponents/Navbar/FrontEndNavbar/FrontEndNavbar.vue";
import FrontEndFooter from "@/Components/FrontEndComponents/FrontEndFooter/FrontEndFooter.vue";

export default {
    name: "GuestLayout",
    components: {
        FrontEndNavbar,
        FrontEndFooter,
    },
};
</script>
