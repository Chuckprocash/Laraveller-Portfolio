<script setup>
</script>
<template>
    <div id="home">

    <section class="bg-light-primary dark:bg-dark-primary lg:h-[85vh] lg:py-0 py-32 overflow-hidden"
    v-motion
    :initial="{
        y: 100,
        opacity: 0,
    }"
    :visible="{
        y: 0,
        opacity: 1,
    }">
        <div class="container mx-auto h-full">
            <div class="pt-8 flex flex-col lg:flex-row items-center h-full">
                <div class="flex-1 flex flex-col items-center md:items-start">
                    <p class="text-lg text-accent mb-[22px]">Hey, I'm Dev 8!Chak.</p>
                    <h1 class="text-4xl md:text-5xl font-bold leading-[44px] 
                        md:leading-tight lg:leading-[1.2] md:tracking-[-2px]">I Build And Design <br/>Web Interfaces</h1>
                    <p class="text-center md:text-left pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id consequatur dolorum aliquam.
                    </p>
                    <button class="btn btn-md md:btn-lg bg-accent hover:bg-light-secondary hover:text-dark-primary transition-all">Get Me For Work</button>
                </div>
                <div class="hidden lg:flex flex-1 justify-end items-center h-full mt-8 md:mt-0 ">
                    <img class="rounded-md" src="https://www.newhorizons.com/Portals/2/EasyDNNnews/1059/robot-working-office-instead-humans.jpg" alt="dev8chak@gmail.com">
                </div>
            </div>
        </div>
    </section>
    </div>
</template>