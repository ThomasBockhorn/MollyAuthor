<template>
    <GuestLayout>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <div>
                <img
                    class="rounded"
                    src="@/../../public/img/book_image_1.jpg"
                    alt="book cover"
                />
            </div>
            <div>
                <h1 class="text-4xl text-center m-5">Molly Felder</h1>
                <h2 class="text-4xl text-center m-5">
                    Writing for Young Readers
                </h2>
                <hr />
                <ul class="m-5">
                    Events
                </ul>
            </div>
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
h1,
h2 {
    font-family: "Wix Madefor Display", sans-serif;
}
</style>
