<template>
    <div>
        <Link href="/">home</Link>
        <Link href="/about">about</Link>
        <Link href="/contact">contact</Link>
    </div>
    <div>
        <slot></slot>
    </div>
</template>

<script setup>

import {Link} from '@inertiajs/vue3'

</script>
