<template>
    <GuestLayout>
        <h1 class="text-4xl text-center m-5">Molly Felder</h1>
        <h2 class="text-4xl text-center m-5">
            <em>Writing for Young Readers</em>
        </h2>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <img class="rounded" src="img/book_image_1.jpg" alt="book cover" />
            <div class="flex-col w-1/2">
                <h3 class="text-2xl text-center m-5">
                    <em>The Fantastic Freewheeler: Sixth-Grade Superhero!</em>
                </h3>
                <p class="text-xl mb-5">
                    The first in a series of four graphic novels about
                    12-year-old Drew Daniels, who fights for justice and saves
                    the day as The Fantastic Freewheeler!
                </p>
                <p class="text-xl">
                    Just like Drew, author Molly Felder has a physical
                    disability called cerebral palsy (CP). CP is different for
                    every person who has it. Molly can’t walk, so she uses a
                    wheelchair—and so does Drew!
                </p>
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="justify-items-center m-10">
            <ul class="w-full">
                <h2 class="text-2xl m-5 text-center">Upcoming Events:</h2>
                <div v-if="Object.keys(events).length != 0">
                    <li v-for="event in events" :key="event.id">
                        <hr />
                        <p class="text-center">{{ event.title }}</p>
                        <p>{{ event.location }}</p>
                        <p>{{ event.description }}</p>
                        <p>{{ event.date }}</p>
                        <hr />
                    </li>
                </div>
                <div v-else>
                    <p class="text-center">No events scheduled at this time.</p>
                </div>
            </ul>
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
