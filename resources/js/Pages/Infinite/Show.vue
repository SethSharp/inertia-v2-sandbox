<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { User } from '@/types'
import { Head, WhenVisible } from '@inertiajs/vue3'
import { onUpdated } from 'vue'

const props = defineProps<{
    users: User[]
}>()

onUpdated(() => {
    console.log(props.users)
})
</script>

<template>
    <Head title="Deferred Props" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                <a target="blank" href="https://v2.inertiajs.com/merging-props">
                    Infinite Scrolling + WhenVisible
                </a>
            </h2>
        </template>

        <div class="py-12">
            <div
                class="mx-auto max-w-7xl text-black sm:px-6 lg:px-8 dark:text-white"
            >
                <div v-for="(user, index) in users" class="my-4 h-40 w-full">
                    <h4 class="text-2xl">{{ index + 1 }} - {{ user.name }}</h4>
                </div>

                <WhenVisible data="users">
                    <template #fallback>
                        <div class="animate-pulse">Loading</div>
                    </template>
                </WhenVisible>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
