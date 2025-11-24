<template>
    <div class="bg-gradient-to-br from-blue-400 to-purple-600 p-4 rounded-lg text-white shadow-lg">
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-2">Location</h2>
            <div class="text-6xl mb-4">
                {{ getWeatherIcon(weatherType) }}
            </div>
            <p class="text-4xl font-semibold mb-2">Temperature</p>
            <p class="text-lg capitalize">{{ weatherType }}</p>
        </div>
    </div>
</template>

<script setup lang="ts">
interface Props{
    Location:string;
    temperature:string;
    weatherType:string;
}

defineProps<Props>()

const getWeatherIcon = (type:string) => {
    const icons: Record<string, string> = {
        sunny: '☀️',
        cloudy: '☁️',
        rainy: '🌧️',
        snowy: '❄️',
        stormy: '🌩️',
        default: '🌈'
    };

    return icons[type.toLowerCase()] || '🌈';
}
</script>

<style scoped>
/*Additional styles if needed*/
</style>