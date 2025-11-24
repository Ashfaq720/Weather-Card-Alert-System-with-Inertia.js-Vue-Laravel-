<script setup>

import siteConfig from '@/data/config.js';

const props = defineProps(['firstName','lastName','email','address']);

const fullName = `${props.firstName} ${props.lastName}`
console.log(props.address);
</script>

<template>
    <h1 class="text-2xl">This is an Interia Page</h1>
    <h2>First Name = {{ firstName }} {{ lastName }}</h2>
    <h2>Age = {{ $page.props.age }}</h2>
    <h2>Email = {{ email }}</h2>
    <h2>Full Name = {{ fullName }}</h2>
    <h2>Address = {{ address }}</h2>
    <h2>Country = {{ $page.props.country }}</h2>
    <h2>Mobile = {{ $page.props.mobile }}</h2>
    <h2>Site Title = {{ siteConfig.title }} </h2>
    <h2>Batch = {{ siteConfig.batch }}</h2>

</template>

<style scoped>
</style>