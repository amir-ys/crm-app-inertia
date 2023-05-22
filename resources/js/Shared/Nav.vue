<template>
    <ul>
        <li><Link href="/">home</Link></li>
        <li><Link href="/users">users</Link></li>
        <li><Link href="/settings">settings</Link></li>
    </ul>
</template>

<script>
import { Link } from "@inertiajs/vue3"
export  default {
    components : { Link }

}

</script>
