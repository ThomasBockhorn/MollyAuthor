<template>
    <GuestLayout>
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
                    Just like Drew Daniels, the boy who becomes a superhero
                    known as The Fantastic Freewheeler, Molly Felder has a
                    physical disability called cerebral palsy (CP). CP is
                    different for every person who has it. Molly can’t walk, so
                    she uses a wheelchair—and so does Drew!
                </p>
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
