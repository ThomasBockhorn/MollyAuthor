<template>
    <AuthenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-xl">Books</h1>
            <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
                <div>grid1</div>
                <div>grid2</div>
                <div>grid3</div>
                <div>grid4</div>
            </div>
        </div>
        <div class="grid justify-items-center absolute bottom-1 left-1">
            <Link
                :href="route('books.create')"
                class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black"
            >
                Create New Book
            </Link>
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
};
</script>

<style></style>
