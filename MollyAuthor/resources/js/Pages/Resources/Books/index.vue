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
            <button
                @click="$router.push({ name: 'books.create' })"
                class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black"
            >
                Create New Book
            </button>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    components: {
        AuthenticatedLayout,
    },
};
</script>

<style></style>
