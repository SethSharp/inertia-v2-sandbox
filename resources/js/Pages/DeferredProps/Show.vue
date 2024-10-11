<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Deferred, Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Deferred Props" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                <a
                    target="blank"
                    href="https://v2.inertiajs.com/deferred-props"
                >
                    Deferred Props
                </a>
            </h2>
        </template>

        <div class="py-12">
            <div
                class="mx-auto max-w-7xl text-black sm:px-6 lg:px-8 dark:text-white"
            >
                <Deferred data="users">
                    <template #fallback>
                        <div class="animate-pulse">
                            This is the fallback loading state...
                        </div>
                    </template>

                    <div v-for="user in users">
                        {{ user.name }}
                    </div>
                </Deferred>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
