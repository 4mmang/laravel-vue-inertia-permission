<script setup>
import MasterLayout from '@/Layouts/Master.vue'; // Adjust path as needed

defineOptions({ layout: MasterLayout });
</script>

<template>
    <div v-if="$page.props.auth.permissions.includes('view name')">
        <h1>Welcome to your Dashboard! {{ $page.props.auth.user.name }}</h1>
    </div>
</template>