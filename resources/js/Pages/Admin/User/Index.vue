<template>
    <Link href="/admin/user/create" class="p-2 px-4 bg-green-600 text-white font-bold">Create</Link>
    <table class="w-full mt-10 shadow-sm">
        <thead class="bg-gray-700 text-white">
            <tr>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100 text-center">
            <tr v-for="(item, index) in data" :key="index">
                <td class="p-3">{{item.name}}</td>
                <td class="p-3">{{item.email}}</td>
                <td class="p-3">edit</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
defineProps(['data'])
</script>
<script>
import layout from '@/layouts/admin.vue'
export default{
    layout:layout
}

</script>
