<template>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="border-t border-gray-200">
            <dl>
            <div v-for="item in data" class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Full name</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ item.name }}</dd>
            </div>
            </dl>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        'data': Array
    })
</script>