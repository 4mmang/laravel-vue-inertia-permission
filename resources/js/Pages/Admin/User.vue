<script setup></script>
<template>
    <div v-if="$page.props.auth.permissions.includes('manage user')">
        <h1>Anda bisa mengelola user</h1>
    </div>
    <div v-else>
        <h1>Anda **tidak** bisa mengelola user</h1>
    </div>
</template>