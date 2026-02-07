<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm, router } from '@inertiajs/vue3';
import { ref } from 'vue'

const props = defineProps({
    project: Object,
    skills: Array,
});

const form = useForm({
    name: props.project.name,
    skill_id: props.project.skill_id,
    project_url: props.project.project_url,
    image: null,
})

const previewImage = ref(null);

const handleImageInput = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.image = file;
    const reader = new FileReader()
    reader.onload = (e) => {
      previewImage.value = e.target.result
    }
    reader.readAsDataURL(file)
  }
}

const submit = () => {
  router.post(`/projects/${props.project.id}`, {
    _method: "put",
    name: form.name,
    skill_id: form.skill_id,
    project_url: form.project_url,
    image: form.image
  })
}
</script>

<template>
    <Head title="Edit Project" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Project
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-md sm:px-6 lg:px-8">
                <form @submit.prevent="submit" class="bg-white p-4">
                    <div>
                        <InputLabel for="name" value="name" />
                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
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
                        <InputLabel for="image" value="image" class="mt-1"/>
                        <div class="mt-2 mb-4">
                            <img 
                                v-if="previewImage || props.project.image_url"
                                :src="previewImage || `/${props.project.image}`" 
                                :alt="props.project.name"
                                class="w-[150px] h-[150px] object-cover rounded"
                            >
                        </div>
                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full"
                            @input="handleImageInput"
                        />
                        <InputError class="mt-2" :message="form.errors.image" />
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
                    <div class="mt-4 flex items-center justify-end">
                        <PrimaryButton
                            class="ms-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>