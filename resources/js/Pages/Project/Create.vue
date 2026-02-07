<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    skills: Array,
});

const form = useForm({
    skill_id: null,
    name: '',
    image: null,
    project_url: '',
})

const submit = () => {
    form.post(route('projects.store'));
};

</script>

<template>
    <Head title="New Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Add New Project
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <form @submit.prevent="submit" class="bg-white p-4">
                    <div>
                        <InputLabel for="name" value="name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div>
                        <InputLabel for="skill_id" value="skill" />
                        <select name="skill_id" v-model="form.skill_id" id="skill_id">
                           <option v-for="skill in skills" :key="skill.id" :value="skill.id">
                            {{ skill.name }}
                            </option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.skill_id" />
                    </div>
                    <div>
                        <InputLabel for="project_url" value="project_url" />

                        <TextInput
                            id="project_url"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.project_url"
                        />

                        <InputError class="mt-2" :message="form.errors.project_url" />
                    </div>
                    <div>
                        <InputLabel for="image" value="image"  class="mt-1"/>

                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full"
                            @input="form.image = $event.target.files[0]"
                        />
                        <InputError class="mt-2" :message="form.errors.image" />
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <PrimaryButton
                            class="ms-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Store
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>