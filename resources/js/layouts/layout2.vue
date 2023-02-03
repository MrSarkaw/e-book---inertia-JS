<template>
    <div>
        <Link href="/">home2</Link>
        <Link href="/about">about2</Link>
        <Link href="/contact">contact2</Link>
    </div>
    <div>
        <slot></slot>
    </div>
</template>

<script setup>

import {Link} from '@inertiajs/vue3'

</script>
