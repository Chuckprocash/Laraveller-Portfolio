<script setup>
    import { Link } from '@inertiajs/vue3';


    const props = defineProps({
        project: Object,
    });

</script>
<template>
<Link :href="project.project_url || '#'" class="flex flex-col items-center text-center cursor-pointer group">
    <div class="mb-6">
        <img :src="`/${project.image}`" alt="dev8Chak" class="rounded-2xl h-26">
    </div>
    <h3>{{ project.name }}</h3>
    <p>{{ project?.skill?.name }}</p>
</Link>
</template>
<style scoped></style>