<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Prefetching" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                <a target="blank" href="https://v2.inertiajs.com/prefetching">
                    Prefetching
                </a>
            </h2>
        </template>

        <div class="py-12">
            <div
                class="mx-auto max-w-7xl text-black sm:px-6 lg:px-8 dark:text-white"
            >
                <Link :href="route('pre-fetching.users')" prefetch>
                    Hover here to prefetch some information
                </Link>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
