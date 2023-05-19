<template>
    <router-view></router-view>
    <h1> Hello, Vuejs with Laravel </h1>
    <router-link :to="{name : 'login'}">login</router-link>
    <br>
    <router-link :to="{name : 'register'}">register</router-link>
</template>
<script>
export default {
    setup() {

    }
}
</script>
