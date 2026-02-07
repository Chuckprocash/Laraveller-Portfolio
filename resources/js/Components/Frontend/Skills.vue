<script setup>
import { inject } from 'vue';

const skills = inject('skills');
</script>
<template>
    <section class="bg-tail-100 dark:bg-tail-d100 py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-8 grid-flow-col gap-2 md:gap-4">
                <div class="flex flex-col items-center justify-center" v-for="skill in skills" :key="skill.id">
                    <img :src="`/${skill.image}`" alt="dev8" width="50" height="50" class="w-[50px] h-50px rounded-xl" />
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped></style>