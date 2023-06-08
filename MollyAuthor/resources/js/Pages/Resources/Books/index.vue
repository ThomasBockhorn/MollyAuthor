<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Books</h1>
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
                        <a href="#">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                            >
                                Noteworthy technology acquisitions 2021
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">
                            Here are the biggest enterprise technology
                            acquisitions of 2021 so far, in reverse
                            chronological order.
                        </p>
                        <a
                            href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Read more
                            <svg
                                aria-hidden="true"
                                class="w-4 h-4 ml-2 -mr-1"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </a>
                        <button
                            @click="deleteBook(book.id)"
                            class="inline-flex items-center mx-3 px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300"
                        >
                            Delete
                        </button>
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
        books: Array,
    },
    methods: {
        deleteBook(id) {
            this.$inertia.delete(route("books.destroy", id));
        },
    },
};
</script>

<style></style>
