<template>
    <div class="space-y-1 px-2 pb-3 pt-2">
        <Link
            href="/"
            class="text-black hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
            aria-current="page"
            >Home</Link
        >
        <Link
            :href="route('books.index')"
            class="text-black hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
            >Books</Link
        >
        <Link
            href="/bio"
            class="text-black hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
            >Bio</Link
        >
        <Link
            href="/contact"
            class="text-black hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
            >Contact</Link
        >
    </div>
</template>
<script>
import { Link } from "@inertiajs/vue3";

export default {
    name: "FrontEndNavbarMobileMenu",
    components: {
        Link,
    },
};
</script>
