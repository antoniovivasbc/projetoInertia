<template>
    <Link href="/teste"> Go to teste </Link>
    <div>
        {{ message }}
    </div>

</template>

<script setup>
    import {Link} from '@inertiajs/vue3'

    defineProps({
        message: {
            type: [Boolean, Number],
            required: true
        },
    });

</script>