<template>
    <Table :data = data></Table>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    
    defineProps({
        data: Array,
    });

</script>

<script>
    import MainLayout from '../../Layouts/MainLayout.vue';
    import Table from '../../Components/Table.vue';
    export default {
        components: {
            Table
        },

        layout: MainLayout
    }
</script>