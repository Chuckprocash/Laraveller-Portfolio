<script setup>
</script>
<template>
    <div class="bg-light-secondary dark:bg-dark-secondary py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <div class="flex space-x-6 items-center justify-center">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/024/856/248/small/wolf-face-in-vibrant-color-mascot-with-ai-generative-free-png.png" 
                    alt="" class="h-20 w-auto">
                </div>
                <div class="flex flex-col items-center text-enter">
                    <h2>Follow Me On:</h2>
                    <div class="flex gap-8 pt-4">
                        <div class="social-icon">
                            <a href="http://facebook.com" target="_blank" rel="noopener noreferrer">
                            <svg role="img" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/>
                            </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="http://linkedin.com" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="http://x.com" target="_blank" rel="noopener noreferrer">
                            <svg role="img" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M14.234 10.162 22.977 0h-2.072l-7.591 8.824L7.251 0H.258l9.168 13.343L.258 24H2.33l8.016-9.318L16.749 24h6.993zm-2.837 3.299-.929-1.329L3.076 1.56h3.182l5.965 8.532.929 1.329 7.754 11.09h-3.182z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="text-paragraph opacity-80 text-[15px]">
                    &copy; 2026 Dev8Chak.com All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</template>
<style scoped>
.social-icon{
    @apply text-accent hover:text-tail-100 hover:text-tail-d100;
}
</style>