<template>
    <nav class="bg-gray-200">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div
                    class="absolute inset-y-0 left-0 flex items-center sm:hidden"
                >
                    <!-- Mobile menu button-->
                    <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        @click="open = !open"
                    >
                        <span class="sr-only">Open main menu</span>

                        <FrontEndNavbarHamburger />
                    </button>
                </div>
                <div
                    class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center"
                >
                    <FrontEndNavbarMenu />
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <FrontEndNavbarMobile v-if="open" />
        </div>
    </nav>
</template>

<script>
import FrontEndNavbarMobile from "@/Components/FrontEndNavbarMobile/FrontEndNavbarMobile.vue";
import FrontEndNavbarMenu from "@/Components/FrontEndNavbarMenu/FrontEndNavbarMenu.vue";
import FrontEndNavbarHamburger from "@/Components/FrontEndNavbarHamburger/FrontEndNavbarHamburger.vue";

export default {
    components: {
        FrontEndNavbarMobile,
        FrontEndNavbarMenu,
        FrontEndNavbarHamburger,
    },
    data() {
        return {
            open: false,
        };
    },
};
</script>
