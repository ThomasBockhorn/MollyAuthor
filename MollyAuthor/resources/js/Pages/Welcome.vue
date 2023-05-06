<template>
    <GuestLayout>
        <div class="grid sm:grid-cols-3 sm:gap-4 justify-items-center m-10">
            <div>
                <img
                    class="rounded"
                    src="@/../../public/img/book_image_1.jpg"
                />
            </div>
            <div>2</div>
            <div>3</div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
export default {
    name: "Welcome",
    components: {
        GuestLayout,
    },
};
</script>
<style scoped>
h1 {
    font-family: "Cedarville Cursive", cursive;
}
</style>
