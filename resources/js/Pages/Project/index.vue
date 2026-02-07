<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';


const props = defineProps({
    projects: Array,
});

const closeMessage = () => {
     document.querySelector('.message').classList.add('hidden');
};

const deleteProject = (id) => {
        if (confirm('Are you sure?')) {
            router.delete(route('projects.destroy', id))
        }
    }

</script>

<template>
    <Head title="Projects" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Projects
            </h2>
        </template>
        <div v-if="$page.props.flash?.success" class="message flex justify-between items-center mx-auto max-w-xl sm:px-6 lg:px-8 bg-green-500 m-2 p-2 rounded">
            <p>{{ $page.props.flash.success }}</p>
            <button class="p-2" @click="closeMessage">x</button>
        </div>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link :href="route('projects.create')" class="px-2 py-2 rounded-md bg-indigo-500 hover:bg-indigo-700 text-white">
                        Add New Project
                    </Link>
                </div>
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">project</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Image</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">skill</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Project URL</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="hover:bg-gray-50">
                        <tr v-for="project in projects">
                            <td class="border border-gray-300 px-4 py-2">{{ project.name }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <img :src="`/${project.image}`" alt="project" width="60" class="w-[60px]">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{project.skill.name}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ project.project_url }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <div class="flex gap-2 justify-center">
                                    <Link 
                                    :href="route('projects.edit', project.id)"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition"
                                    >
                                    Edit
                                    </Link>
                                    <button 
                                    @click="deleteProject(project.id)"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition"
                                    >
                                    Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>