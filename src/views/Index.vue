<template>
    <div id="index">
        <NavBar/>
    </div>
</template>

<script>

import NavBar from '@/components/NavBar.vue'

export default {
    name: 'Index',
    components: {
        NavBar
    }
}
</script>

<style scoped>
@import '../assets/css/index.css';
</style>