<template>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <NavLink
            :href="route('dashboard')"
            :active="route().current('dashboard')"
        >
            Dashboard
        </NavLink>
        <NavLink
            :href="route('books.index')"
            :active="route().current('books.index')"
        >
            Books
        </NavLink>
        <NavLink
            :href="route('books.create')"
            :active="route().current('books.create')"
        >
            Create a Book
        </NavLink>
        <NavLink
            :href="route('events.index')"
            :active="route().current('events.index')"
        >
            Events
        </NavLink>
        <NavLink
            :href="route('events.create')"
            :active="route().current('events.create')"
        >
            Create an Event
        </NavLink>
    </div>
</template>
<script>
import NavLink from "@/Components/NavLink.vue";
export default {
    components: {
        NavLink,
    },
};
</script>
