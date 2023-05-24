<template>
    <div v-if="field">
    <span class="text-danger">
        {{ field }}
    </span>
    </div>
</template>

<script setup>
const props = defineProps({
    field: String,
})
</script>

<style scoped>

</style>
