<template>
    <GuestLayout>
        <h1 class="text-4xl text-center m-5">Molly Felder</h1>
        <h2 class="text-4xl text-center m-5">Bio</h2>
        <div class="grid sm:grid-cols-2 sm:gap-4 justify-items-center m-10">
            <div>
                <img
                    class="rounded"
                    src="@/../../public/img/MollyPatterson.jpeg"
                    alt="selfie and Patterson"
                />
            </div>
            <div>
                <p class="m-5 text-xl">
                    Molly has help from her assistance dog, Patterson, who can
                    do things that her CP makes more difficult, like picking up
                    items she accidentally drops.
                </p>
                <p class="m-5 text-xl">
                    Molly received her BA and MA from New York University’s
                    Gallatin School, where she studied creative writing and
                    fiction writing. She is a Children’s Book Academy graduate
                    and has attended two Revision Retreats with The Highlights
                    Foundation. She and Patterson live in Alabama. They were
                    brought together by
                    <a
                        href="https://www.canine.org"
                        class="underline underline-offset-1"
                        >Canine Companions</a
                    >, which has matched disabled people with assistance dogs
                    since 1975.
                </p>
                <img
                    src="@/../../public/img/CBA-graduation-badge.jpg"
                    alt="CBA Badge"
                    class="rounded"
                />
            </div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
export default {
    name: "Bio",
    components: {
        GuestLayout,
    },
};
</script>

<style></style>
