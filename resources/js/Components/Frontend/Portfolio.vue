<script setup>
    import ProjectsComponent from './ProjectsComponent.vue';
</script>
<template>
    <div id="portfolio" >
    <section class="bg-light-primary dark:bg-dark-primary section"
    v-motion
    :initial="{
        y: 100,
        opacity: 0,
    }"
    :visible="{
        y: 0,
        opacity: 1,
    }">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My Latest Work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cupiditate
                    iste fuga incidunt recusandae inventore repellat, hic quibusdam eligendi dolore.
                </p>
                <ProjectsComponent />
            </div>
        </div>
    </section>
    </div>
</template>
<style scoped></style>