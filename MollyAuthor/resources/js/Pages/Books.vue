<template>
    <GuestLayout>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
export default {
    name: "Books",
    components: {
        GuestLayout,
    },
};
</script>

<style></style>
