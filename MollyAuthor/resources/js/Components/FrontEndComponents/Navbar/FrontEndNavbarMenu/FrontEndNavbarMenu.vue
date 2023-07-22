<template>
    <div class="hidden sm:ml-6 sm:block">
        <div class="flex space-x-4">
            <Link
                href="/"
                class="text-black rounded-md px-3 py-2 text-lg font-medium hover:bg-gray-700 hover:text-white"
                :class="{ active: $page.url === '/' }"
                aria-current="page"
                >Home</Link
            >
            <Link
                href="/literature"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                :class="{ active: $page.url === '/literature' }"
                >Books</Link
            >
            <Link
                href="/bio"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                :class="{ active: $page.url === '/bio' }"
                >Bio</Link
            >
            <Link
                href="/contact"
                class="text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium"
                :class="{ active: $page.url === '/contact' }"
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
<style scoped>
.active {
    background-color: #6b7280;
    color: #fff;
}
</style>
