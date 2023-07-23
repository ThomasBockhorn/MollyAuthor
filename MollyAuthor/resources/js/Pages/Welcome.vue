<template>
    <GuestLayout>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <div>
                <img
                    class="rounded"
                    src="img/book_image_1.jpg"
                    alt="book cover"
                />
            </div>
            <div>
                <h1 class="text-4xl text-center m-5">Molly Felder</h1>
                <h2 class="text-4xl text-center m-5">
                    Writing for Young Readers
                </h2>
                <h3 class="text-2xl text-center m-7">Upcoming Events:</h3>
                <ul class="m-5">
                    <li v-for="event in events" :key="event.id" class="mt-3">
                        <hr />
                        <h3 class="text-2xl text-center mb-2">
                            {{ event.title }}
                        </h3>
                        <p class="text-xl">{{ event.location }}</p>
                        <p class="text-xl">{{ event.description }}</p>
                        <p class="text-xl">{{ event.date }}</p>
                        <hr />
                    </li>
                </ul>
                <hr />
                <img
                    id="molly-portrait"
                    src="img/MollyPortrait.jpg"
                    alt="Molly Portrait"
                    class="rounded m-5 d-block w-100"
                />
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
    props: {
        events: {
            type: Object,
        },
    },
};
</script>
<style scoped>
#molly-portrait {
    width: 50%;
    height: 45%;
}
</style>
