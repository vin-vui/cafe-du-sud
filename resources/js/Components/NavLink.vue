<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1 -mb-1 border-b-8 border-double border-violet-4 text-md font-Dela text-violet-4 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 -mb-1 border-b-8 border-double border-transparent text-md font-Dela text-black hover:text-slate-700 hover:border-slate-700 focus:outline-none focus:text-slate-700 focus:border-slate-700 transition duration-200 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
