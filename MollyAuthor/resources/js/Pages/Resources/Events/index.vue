<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Events</h1>
            <div class="mt-5 overflow-hidden">
                <table class="mx-auto w-full">
                    <tr class="mb-5">
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                    <tr v-for="event in events" :key="event.id">
                        <td>{{ event.title }}</td>
                        <td>{{ event.description }}</td>
                        <td>{{ event.location }}</td>
                        <td>{{ event.date }}</td>
                        <td>
                            <Link
                                :href="route('events.edit', event.id)"
                                method="get"
                                class="rounded bg-green-500 text-white p-2"
                            >
                                Edit
                            </Link>
                        </td>
                        <td>
                            <Link
                                :href="route('events.destroy', event.id)"
                                class="rounded bg-red-500 text-white p-2"
                                method="delete"
                            >
                                Delete
                            </Link>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        AuthenticatedLayout,
        Link,
    },
    props: {
        events: {
            type: Object,
        },
    },
};
</script>
<style scoped>
th,
td {
    padding: 10px;
}
</style>
