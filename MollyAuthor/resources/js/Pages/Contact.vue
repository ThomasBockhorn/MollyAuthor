<template>
    <GuestLayout>
        <h1 class="text-4xl text-center m-5">Molly Felder</h1>
        <h2 class="text-4xl text-center m-5">Contact</h2>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <div>
                <img
                    src="@/../../public/img/walk.jpg"
                    alt="walk in Henry the Boy"
                    class="rounded"
                />
            </div>
            <div>
                <p class="m-5 text-xl">Contact me at:</p>
                <p class="m-5 text-xl">Email: felder.molly@gmail.com</p>
            </div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "Contact",
    components: {
        GuestLayout,
    },
};
</script>

<style></style>
