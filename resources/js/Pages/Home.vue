<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import Frontend from '@/Layouts/Frontend.vue';
    import AboveTheFold from '@/Components/Frontend/AboveTheFold.vue';
    import Promote from '@/Components/Frontend/Promote.vue';
    import About from '@/Components/Frontend/About.vue';
    import Skills from '@/Components/Frontend/Skills.vue';
    import Portfolio from '@/Components/Frontend/Portfolio.vue';
    import Services from '@/Components/Frontend/Services.vue';
    import Contact from '@/Components/Frontend/Contact.vue';
    import { provide } from 'vue';
    
    
    const props = defineProps({
        skills: Array,
        projects: Array,
    });

    // Make skills available to all child components
    provide('skills', props.skills);
    provide('projects', props.projects);

    
</script>
<template>
    <Head title="Portfolio"/>
    <Frontend>
        <!-- AboveTheFold primary-->
        <AboveTheFold />
        <!-- Promote tail-100-->
        <Promote />
        <!-- About Seondary -->
        <About />
        <!-- Skills Tail-100 -->
        <Skills />
        <!-- Portfolio Primary -->
        <Portfolio />
        <!-- Services Secondary -->
        <Services />
        <!-- Contact Primary -->
        <Contact />
    </Frontend>
</template>
<style scoped>

</style>