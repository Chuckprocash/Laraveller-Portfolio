<script setup></script>
<template>
    <div  id="about">
    <section class="bg-light-secondary section dark:bg-dark-secondary"
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
            <div class="flex flex-col lg:flex-row gap-24">
                <img src="https://fixitworkshop.co.uk/wp-content/uploads/2020/12/img_3357.jpg?w=1200" alt="dev8chack@gmail.com" 
                class="object-cover h-full lg:w-1/2 max-w-[560px] md:mx-auto lg:mx-0 rounded-2xl" />
                <div class="flex flex-col items-center text-center md:items-start md:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl mb-3 font-medium lg:font-extrabold">About Me</h2>
                        <p class="mb-4 text-accent">Freelane Frontend Developer</p>
                        <hr class="mb-8 opacity-95 dark:opaity-5" />
                        <p class="mb-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quaerat ratione nesciunt omnis quasi maiores a 
                        aliquid corporis consectetur quam necessitatibus mollitia beatae excepturi aut nemo ipsum, ad dignissimos 
                        obcaecati?<br/><br/></p>
                    </div>
                    <a href="#" class="btn btn md bg-accent text-tail-200">Contact Me</a>
                </div>
            </div>
        </div>
    </section>
    </div>
</template>
<style scoped></style>