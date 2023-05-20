<template>
    <h1> Hello, Vuejs with Laravel </h1>
    <router-link :to="{name : 'login'}">login</router-link>
    <br>

    <v-icon icon="mdi-home"></v-icon>

    <router-link :to="{name : 'register'}">register</router-link>
    <router-view></router-view>
</template>
<script>
export default {
    setup() {

    }
}
</script>
