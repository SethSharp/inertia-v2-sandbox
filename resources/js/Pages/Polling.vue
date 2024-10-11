<script setup lang="ts">
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, usePoll } from '@inertiajs/vue3'
import { ref } from 'vue'

const pollingLog = ref<string[]>([])

const buildTime = () => {
    const date = new Date()
    return `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`
}

const { start, stop } = usePoll(
    5000,
    {
        onStart: () => {
            pollingLog.value.push(`Starting poll at: ${buildTime()}`)
        },
        onFinish: () => {
            pollingLog.value.push(`Finished polling at: ${buildTime()}`)
        },
    },
    {
        keepAlive: false, // when true it will continue working when tab is not active
        autoStart: false,
    },
)
</script>

<template>
    <Head title="Polling" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                <a target="blank" href="https://v2.inertiajs.com/polling">
                    Polling
                </a>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex gap-2">
                    <PrimaryButton @click="stop"> Stop polling </PrimaryButton>
                    <SecondaryButton @click="start">
                        Start polling
                    </SecondaryButton>
                </div>
                <div
                    class="overflow-hidden bg-white p-5 text-black shadow-sm sm:rounded-lg dark:bg-gray-900 dark:text-white"
                >
                    <ul v-for="(log, index) in pollingLog" :key="index">
                        <li class="p-1">
                            {{ log }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
