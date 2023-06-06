<template>
    <authenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Create a Book</h1>

            <form
                @submit.prevent="submit"
                class="grid gap-4 justify-items-center m-10"
            >
                <label class="text-xl" for="title">Title:</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    v-model="form.title"
                    required
                    class="border-2 border-black rounded p-1"
                />
                <label class="text-xl" for="genre">Genre:</label>
                <input
                    type="text"
                    name="genre"
                    id="genre"
                    v-model="form.genre"
                    required
                    class="border-2 border-black rounded p-1"
                />
                <label class="text-xl" for="description">Description:</label>
                <textarea
                    name="description"
                    id="description"
                    v-model="form.description"
                    required
                    rows="4"
                    cols="50"
                    class="border-2 border-black rounded p-1"
                ></textarea>
                <label class="text-xl" for="cover">Cover:</label>
                <input
                    type="file"
                    name="cover"
                    id="cover"
                    required
                    accept="image/png, image/gif, image/jpeg"
                    class="border-2 border-black rounded p-1"
                />
                <button
                    type="submit"
                    class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black"
                >
                    Submit
                </button>
            </form>
        </div>
        <div class="grid justify-items-center absolute bottom-1 left-1">
            <Link
                :href="route('books.index')"
                class="bg-cyan-500 rounded p-1 border-2 border-black text-white hover:bg-cyan-200 hover:text-black inline text-center"
            >
                Go Back
            </Link>
        </div></authenticatedLayout
    >
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

export default {
    components: {
        AuthenticatedLayout,
        Link,
    },
    setup() {
        const form = reactive({
            title: "",
            genre: "",
            description: "",
            cover: "",
        });

        function submit() {
            router.post("/books", form);
        }

        return {
            form,
            submit,
        };
    },
};
</script>

<style></style>
