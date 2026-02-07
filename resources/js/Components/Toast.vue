<script setup>
import { ref, watch } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const toasts = ref([]);

watch(() => page.props.flash.success, (newVal) => {
  if (newVal) {
    addToast(newVal, 'success');
  }
});

watch(() => page.props.flash.error, (newVal) => {
  if (newVal) {
    addToast(newVal, 'error');
  }
});

const addToast = (message, type) => {
  const id = Date.now();
  toasts.value.push({ id, message, type });
  
  setTimeout(() => {
    removeToast(id);
  }, 3000);
};

const removeToast = (id) => {
  toasts.value = toasts.value.filter(toast => toast.id !== id);
};
</script>

<template>
  <div class="fixed top-4 right-4 z-50 space-y-2">
    <div
      v-for="toast in toasts"
      :key="toast.id"
      :class="[
        'px-4 py-3 rounded-lg shadow-lg text-white',
        toast.type === 'success' ? 'bg-green-500' : 'bg-red-500'
      ]"
    >
      {{ toast.message }}
    </div>
  </div>
</template>