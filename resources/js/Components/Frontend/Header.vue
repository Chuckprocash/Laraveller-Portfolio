<script setup>
    import { ref, onMounted } from 'vue';

  const navigations = [
      {name: 'Home', href: '#home'},
      {name: 'About', href: '#about'},
      {name: 'Portfolio', href: '#portfolio'},
      {name: 'Services', href: '#services'},
      {name: 'Contact', href: '#contact'},
    ];

    const mobileMenu = ref(false);
    const toggleMenu = () => {
        mobileMenu.value = !mobileMenu.value;
    }

    const stickyMenu = ref(true);
    const setScrollMenu = (isScrolled) => stickyMenu.value = isScrolled;

    onMounted(() => {
      window.addEventListener('scroll', () => {
        return window.scrollY > 50 ? setScrollMenu(true) : setScrollMenu(false) ;
      });
    });

</script>
<template>
    
<nav class="bg-light-primary dark:bg-dark-primary w-full z-20 top-0 start-0 md:border-b md:border-default" :class="{'fixed' : stickyMenu}">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
        <span class="self-center text-xl text-heading text-tail-d100 dark:text-white font-semibold whitespace-nowrap">Dev<span class="text-accent">8</span>Chak</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" @click="toggleMenu"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
    </button>
    <div class="w-full md:block md:w-auto" :class="{ hidden : !mobileMenu }" id="navbar-default">
      <ul class="bg-light-secondary dark:bg-dark-secondary md:bg-light-primary md:dark:bg-dark-primary font-medium flex flex-col p-4 md:p-0 mt-4 rounded-base md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
        <li v-for="(navigation, index) in navigations" :key="index">
          <a :href="navigation.href" class="block py-2 px-3 text-heading rounded text-accent hover:bg-tail-200 hover:dark:bg-cyan-950 md:dark:bg-transparent" aria-current="page">{{ navigation.name }}</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>

</template>