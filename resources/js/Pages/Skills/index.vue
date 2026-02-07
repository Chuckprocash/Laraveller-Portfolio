<script setup>

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link, router } from '@inertiajs/vue3';

    const props = defineProps({
        skills: Array,
    });

    const closeMessage = () => {
        document.querySelector('.message').classList.add('hidden');
    };

    // console.log(usePage().props)

    const getImageName = (url) => {
    return url.split('/').pop();
    }
    //
    const deleteSkill = (id) => {
        if (confirm('Are you sure?')) {
            router.delete(route('skills.destroy', id))
        }
    }

</script>

<template>
    <Head title="Skills" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Skills
            </h2>
         
        </template>
        <div v-if="$page.props.flash?.success" class="message flex justify-between items-center mx-auto max-w-xl sm:px-6 lg:px-8 bg-green-500 m-2 p-2 rounded">
            <p>{{ $page.props.flash.success }}</p>
            <button class="p-2" @click="closeMessage">x</button>
        </div>
        <div class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link :href="route('skills.create')" class="px-2 py-2 rounded-md bg-indigo-500 hover:bg-indigo-700 text-white">Add New Skill</Link>
                </div>
                <table class="w-full border-collapse sm:border border-gray-300">
                    <thead class="bg-gray-100 hidden sm:table-header-group ">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Skill</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Image</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="hover:bg-gray-50 block sm:table-row-group">
                        <tr v-for="skill in skills" :key="skill.id" class="block md:table-row">
                            <td class="sm:border border-gray-300 px-4 py-2 block text-center sm:table-cell before:content-['Skill\A'] md:before:content-none before:font-bold before:whitespace-pre">
                                {{ skill.name }}</td>
                            <td class="sm:border border-gray-300 px-4 py-2 flex justify-center sm:table-cell ">
                                <img :src="`/${skill.image}`" :alt="getImageName(skill.image)" width="60" height="60" class="w-[60px] h-[60px] object-fit-contain">
                            </td>
                            <td class="sm:border border-gray-300 px-4 py-2 block text-center sm:table-cell">
                                <div class="flex gap-2 justify-center">
                                    <Link 
                                    :href="route('skills.edit', skill.id)"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition"
                                    >
                                    Edit
                                    </Link>
                                    <button 
                                    @click="deleteSkill(skill.id)"
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