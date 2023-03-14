<template>
    <Header></Header>
    <slot></slot>
</template>

<script setup>
    import Header from '../Components/Header.vue';
    import { Link } from '@inertiajs/vue3';
</script>