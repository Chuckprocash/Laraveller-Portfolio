<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    body: ''
});

const toast = ref(false);

const clearForm = () => {
    toast.value = true;
    form.reset();
    setTimeout(() => {toast.value = false}, 3000);
};

const submit = () => {
    form.post(route('contact'), {
        onSuccess: () => clearForm(),
        preserveScroll: true,
    });
};

</script>
<template>
    <div id="contact" >
    <section class="section bg-light-primary dark:bg-dark-primary pb-4"
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
                <h2 class="section-title">Contact Me</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis sed quia soluta magni in. Dolorum?
                </p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-x-8">
                <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-body text-xl mb-2">Have Any Question?</h2>
                            <p class="text-paragraph mb-2">I am here to help you.</p>
                            <p class="text-paragraph mb-2">Email me at dev8chak@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-body text-xl mb-2">My Current Location</h2>
                            <p class="text-paragraph mb-2">Mymensingh, Bangladesh</p>
                            <p class="text-paragraph mb-2">Serving clients worldwide.</p>
                        </div>
                    </div>
                </div>
                <form @submit.prevent="submit" class="space-y-8 w-full max-w-md">
                    <div v-if="toast" class="toast bg-tail-100 dark:bg-tail-d100 text-light-secondary rounded-md px-2 py-1">
                        Thank you for contacting me.
                    </div>
                    <div class="flex gap-8">
                        <div>
                            <input type="text" v-model="form.name" class="input" placeholder="Your Name" />
                            <span v-if="form.errors.name" class="text-sm text-red-400 m-2">{{ form.errors.name }}</span>
                        </div>
                        <div>
                            <input type="email" v-model="form.email" class="input" placeholder="Your Email" />
                            <span v-if="form.errors.email" class="text-sm text-red-400 m-2">{{ form.errors.email }}</span>
                        </div>
                    </div>
                    <textarea class="textarea" v-model="form.body" placeholder="Your Message"></textarea>
                    <span v-if="form.errors.body" class="text-sm text-red-400 m-2">{{ form.errors.body }}</span>
                    <button class="btn btn-lg bg-accent hover:bg-secondary text-white" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    </div>
</template>
<style scoped></style>