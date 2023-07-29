<template>
    <authenticatedLayout>
        <div class="m-5">
            <h1 class="text-center text-2xl">Create a Book</h1>

            <form
                @submit.prevent="submit"
                class="grid gap-4 justify-items-center m-10"
                enctype="multipart/form-data"
            >
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                        required
                        v-model="form.title"
                    />
                    <label
                        for="title"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Title</label
                    >
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        type="text"
                        name="genre"
                        id="genre"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                        required
                        v-model="form.genre"
                    />
                    <label
                        for="genre"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Genre</label
                    >
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        for="description"
                        class="block mb-2 text-sm font-medium text-gray-500"
                        >Description</label
                    >
                    <textarea
                        id="description"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Write your description here..."
                        required
                        v-model="form.description"
                    ></textarea>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-500"
                        for="file_input"
                        >Upload Cover Image</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="file_input"
                        type="file"
                        accept="image/*"
                        required
                        @change="onChangeFile"
                    />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-500"
                        for="purchase_link"
                        >Amazon Link</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="purchase_link"
                        type="url"
                        required
                        v-model="form.purchase_link"
                    />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-500"
                        for="purchase_second_link"
                        >Barnes and Noble</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="purchase_second_link"
                        type="url"
                        v-model="form.purchase_second_link"
                    />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-500"
                        for="purchase_third_link"
                        >Bookshop.org</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="purchase_third_link"
                        type="url"
                        v-model="form.purchase_third_link"
                    />
                </div>
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Submit
                </button>
            </form>
        </div>
    </authenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useForm } from "@inertiajs/vue3";

export default {
    components: {
        AuthenticatedLayout,
    },
    setup() {
        const form = useForm({
            title: "",
            genre: "",
            description: "",
            purchase_link: "",
            purchase_second_link: "",
            purchase_third_link: "",
            cover: "",
        });

        function submit() {
            form.post("/books", form);
            form.reset();
        }

        return {
            form,
            submit,
        };
    },
    methods: {
        onChangeFile(e) {
            this.form.cover = e.target.files[0];
        },
    },
};
</script>

<style></style>
