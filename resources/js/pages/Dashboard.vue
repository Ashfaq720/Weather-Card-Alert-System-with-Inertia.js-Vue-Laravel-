<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import WeatherCard from '@/components/custom/weatherCard.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                <!-- hey,there -->
                    <!-- <PlaceholderPattern /> -->
                     <WeatherCard Location="Dhaka" weatherType="Sunny" temperature="30°C"/>
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <!-- <PlaceholderPattern /> -->
                    <WeatherCard Location="Chittagong" weatherType="Rainy" temperature="25°C"/>
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <!-- <PlaceholderPattern /> -->
                    <!-- <WeatherCard Location="Sylhet" weatherType="Cloudy" temperature="28°C"/> -->
                     <Alert>
                    <CheckCircle2Icon />
                    <AlertTitle>Success! Your changes have been saved</AlertTitle>
                    <AlertDescription>
                        This is an alert with icon, title and description.
                    </AlertDescription>
                    </Alert>
                    <Alert>
                    <PopcornIcon />
                    <AlertTitle>This Alert has a title and an icon. No description.</AlertTitle>
                    </Alert>
                    <Alert variant="destructive">
                    <AlertCircleIcon />
                    <AlertTitle>Unable to process your payment.</AlertTitle>
                    <AlertDescription>
                        <p>Please verify your billing information and try again.</p>
                        <ul class="mt-2 list-inside list-disc space-y-1">
                        <li>Check your card details</li>
                        <li>Ensure sufficient funds</li>
                        <li>Verify billing address</li>
                        </ul>
                    </AlertDescription>
                    </Alert>
                </div>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
            >
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
