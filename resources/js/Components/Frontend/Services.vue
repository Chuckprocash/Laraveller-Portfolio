<script setup></script>
<template>
    <div  id="services">
    <section class="bg-light-seondary dark:bg-dark-secondary py-32"
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
                <h2 class="section-title">What I Offer For My Clients</h2>
                <p class="subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Commodi rerum sint, ea rem temporibus laudantium.</p>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="bg-tail-100 dark:bg-tail-d100 rounded-2xl p-6  max-w-[300px]">
                    <div class="text-acent rounded-sm w-12 h-12 flex items-center justify-center mb-24 text-[24px]">
                        <img src="https://www.svgrepo.com/show/502054/minimizemajor.svg" alt="web design" class="w-full">
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque?</p>
                </div>
                <div class="bg-tail-100 dark:bg-tail-d100 rounded-2xl p-6  max-w-[300px]">
                    <div class="text-acent rounded-sm w-12 h-12 flex items-center justify-center mb-24 text-[24px]">
                        <img src="https://www.svgrepo.com/show/501924/draftorders-major.svg" alt="web design" class="w-full">
                    </div>
                    <h4 class="text-xl font-medium mb-2">Fast Dashboard</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque?</p>
                </div>
                <div class="bg-tail-100 dark:bg-tail-d100 rounded-2xl p-6  max-w-[300px]">
                    <div class="text-acent rounded-sm w-12 h-12 flex items-center justify-center mb-24 text-[24px]">
                        <img src="https://www.svgrepo.com/show/501940/exchangemajor.svg" alt="web design" class="w-full">
                    </div>
                    <h4 class="text-xl font-medium mb-2">Website Redesign</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque?</p>
                </div>
                <div class="bg-tail-100 dark:bg-tail-d100 rounded-2xl p-6  max-w-[300px]">
                    <div class="text-acent rounded-sm w-12 h-12 flex items-center justify-center mb-24 text-[24px]">
                        <img src="https://www.svgrepo.com/show/501925/domains-major.svg" alt="web design" class="w-full">
                    </div>
                    <h4 class="text-xl font-medium mb-2">Branding & SEO</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque?</p>
                </div>
            </div>
        </div>
    </section>
    </div>
</template>
<style scoped></style>