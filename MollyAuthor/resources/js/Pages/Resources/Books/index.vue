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
