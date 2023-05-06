<template>
    <div>
        <FrontEndNavbar />
        <slot></slot>
    </div>
</template>

<script>
import FrontEndNavbar from "@/Components/FrontEndNavbar/FrontEndNavbar.vue";
export default {
    name: "GuestLayout",
    components: {
        FrontEndNavbar,
    },
};
</script>

<style></style>
