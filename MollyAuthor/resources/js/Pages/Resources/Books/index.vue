<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Books</h1>
            <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
                <div
                    v-for="book in books"
                    :key="book.id"
                    class="border-2 border-black rounded p-1"
                >
                    <img
                        :src="'/storage/covers/' + book.cover"
                        :alt="book.title"
                        class="w-40 h-40"
                    />
                    <h2 class="text-xl">{{ book.title }}</h2>
                    <p class="text-lg">{{ book.genre }}</p>
                    <p class="text-lg">{{ book.description }}</p>
                    <Link
                        :href="route('books.edit', book.id)"
                        class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black"
                    >
                        Edit
                    </Link>
                    <form @submit.prevent="destroy(book.id)" class="inline">
                        <button
                            type="submit"
                            class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black"
                        >
                            Delete
                        </button>
                    </form>
                </div>
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
        books: Array,
    },
};
</script>

<style></style>
