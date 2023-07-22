<template>
    <div class="pt-2 pb-3 space-y-1">
        <ResponsiveNavLink
            :href="route('dashboard')"
            :active="route().current('dashboard')"
        >
            Dashboard
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('books.index')"
            :active="route().current('books.index')"
        >
            Books
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('books.create')"
            :active="route().current('books.create')"
        >
            Create a Book
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('events.index')"
            :active="route().current('events.index')"
        >
            Events
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('events.create')"
            :active="route().current('events.create')"
        >
            Create an Event
        </ResponsiveNavLink>
    </div>
</template>

<script>
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";

export default {
    components: {
        ResponsiveNavLink,
    },
};
</script>
