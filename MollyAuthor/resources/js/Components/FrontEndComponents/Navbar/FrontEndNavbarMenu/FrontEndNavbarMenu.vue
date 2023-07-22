<template>
    <div class="hidden sm:ml-6 sm:block">
        <div class="flex space-x-4">
            <Link
                href="/"
                class="text-black rounded-md px-3 py-2 text-lg font-medium hover:bg-gray-700 hover:text-white"
                aria-current="page"
                >Home</Link
            >
            <Link
                href="/literature"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                >Books</Link
            >
            <Link
                href="/bio"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                >Bio</Link
            >
            <Link
                href="/contact"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                >Contact</Link
            >
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/vue3";

export default {
    name: "FrontEndNavbarMenu",
    components: {
        Link,
    },
};
</script>
