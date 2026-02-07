<script setup>
    import ProjectCard from './ProjectCard.vue';
    import { inject, ref } from 'vue';

    const currentTab = ref(null);

    const skills = inject('skills');
    const projects = inject('projects');
    const filteredProjects = ref(projects);
    const filterProjects = (id) => {
        if(!id){
            currentTab.value = null;
            filteredProjects.value = projects;
        }else{
            currentTab.value = id;
            filteredProjects.value = projects.filter(project => project.skill.id === id);
        }
    };
</script>
<template>
    <div class="container mx-auto">
        <nav class="mb-4 border-b border-tail-100 dark:border-tail-d100">
            <ul class="flex flex-wrap -mb-px justify-evenly">
                <li class="me-2" @click="filterProjects(0)">
                    <a href="#portfolio" class="inline-block p-4 border-b rounded-t-base border-transparent  hover:text-accent hover:border-tail-200 hover:dark:border-tail-d200" 
                    aria-current="page" :class="{active : currentTab == null}">All</a>
                </li>
                <li class="me-2" v-for="skill in skills" :key="skill.id" @click="filterProjects(skill.id)">
                    <a href="#portfolio" class="inline-block p-4 border-b border-transparent rounded-t-base hover:text-accent hover:border-tail-200 
                    hover:dark:border-tail-d200" :class="{active : currentTab === skill.id}">{{ skill.name }}</a>
                </li>
            </ul>
        </nav>
        <div class="grid gap-y-12 md:grid-cols-3 md:gap-8">
            <ProjectCard v-for="project in filteredProjects" :key="project.id" :project="project"/>
        </div>
    </div>
</template>
<style scoped>
.active {
    @apply border-tail-200 dark:border-tail-d200 text-accent;
    }
</style>