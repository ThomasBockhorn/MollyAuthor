<template>
    <GuestLayout>
        <div class="m-5">
            <h1 class="text-4xl text-center m-5">Molly Felder</h1>
            <h2 class="text-4xl text-center m-5">Books</h2>
            <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow m-5"
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
                            <a :href="book.purchase_link">Amazon</a>
                        </p>
                        <p
                            class="mb-3 font-normal text-gray-700"
                            v-if="book.purchase_second_link"
                        >
                            <a :href="book.purchase_second_link"
                                >Barnes and Noble</a
                            >
                        </p>
                        <p
                            class="mb-3 font-normal text-gray-700"
                            v-if="book.purchase_third_link"
                        >
                            <a :href="book.purchase_third_link">Bookshop.org</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
export default {
    name: "Books",
    components: {
        GuestLayout,
    },
    props: {
        books: {
            type: Object,
        },
    },
};
</script>

<style></style>
