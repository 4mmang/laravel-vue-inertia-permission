<script setup>
import Navbar from '@/Layouts/Navbar.vue'; 

</script>

<template>
    <!-- navbar -->
    <Navbar/>


    <main class="pt-24 px-4">
        <!-- slot default -->
        <slot />

    </main>
</template>
