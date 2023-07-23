<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                    v-for="book in books"
                    :key="book.id"
                >
                    <div href="#">
                        <img
                            class="rounded-t-lg"
                            :src="'/storage/covers/' + book.cover"
                            :alt="book.title"
                        />
                    </div>
                    <div class="p-5">
                        <h5
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                        >
                            {{ book.title }}
                        </h5>
                        <h5
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                        >
                            {{ book.genre }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700">
                            {{ book.description }}
                        </p>
                        <p class="mb-3 font-normal text-gray-700">
                            <a href="{{ book.purchase_link }}">{{
                                book.purchase_link
                            }}</a>
                        </p>
                        <p class="mb-3 font-normal text-gray-700">
                            <a href="{{ book.purchase_second_link }}">{{
                                book.purchase_second_link
                            }}</a>
                        </p>
                        <p class="mb-3 font-normal text-gray-700">
                            <a href="{{ book.purchase_third_link }}">{{
                                book.purchase_third_link
                            }}</a>
                        </p>
                        <Link
                            :href="route('books.edit', book.id)"
                            method="get"
                            as="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Edit
                        </Link>
                        <Link
                            :href="route('books.destroy', book.id)"
                            method="delete"
                            as="button"
                            class="inline-flex items-center mx-3 px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300"
                        >
                            Delete
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";
import { onDeactivated } from "vue";

export default {
    components: {
        AuthenticatedLayout,
        Link,
        onDeactivated,
    },
    props: {
        books: Object,
    },
};
</script>

<style></style>
