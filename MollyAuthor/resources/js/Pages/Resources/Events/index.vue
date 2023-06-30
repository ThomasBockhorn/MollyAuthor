<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Events</h1>
            <div class="mt-5">
                <table class="mx-auto w-full">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr v-for="event in events" :key="event.id">
                        <td>{{ event.title }}</td>
                        <td>{{ event.description }}</td>
                        <td>{{ event.location }}</td>
                        <td>{{ event.date }}</td>
                        <td>
                            <button class="rounded-full bg-green text-white">
                                Edit
                            </button>
                        </td>
                        <td>
                            <button class="rounded-full bg-red text-white">
                                Delete
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
export default {
    components: {
        AuthenticatedLayout,
    },
    props: {
        events: {
            type: Object,
        },
    },
};
</script>

<style></style>
