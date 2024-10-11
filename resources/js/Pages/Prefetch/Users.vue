<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { User } from '@/types'
import { Head } from '@inertiajs/vue3'

defineProps<{
    users: User[]
}>()
</script>

<template>
    <Head title="Prefetching" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div
                class="mx-auto max-w-7xl text-black sm:px-6 lg:px-8 dark:text-white"
            >
                <p>
                    The below users were prefetched - useful for longer queries
                    when you know a user will navigate to a specific page.
                </p>
                <ol class="list-inside list-decimal">
                    <li v-for="user in users" :key="user.id">
                        {{ user.name }}
                    </li>
                </ol>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
