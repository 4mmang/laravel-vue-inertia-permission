<script setup>
import MasterLayout from '@/Layouts/Master.vue'; // Adjust path as needed

defineOptions({ layout: MasterLayout });
</script>

<template>
    <h1>Welcome to your Dashboard!</h1>
    <p>This content is rendered inside the MasterLayout's slot.</p>
</template>