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
            <tr v-for="(item, index) in data.data" :key="index">
                <td class="p-3">{{item.name}}</td>
                <td class="p-3">{{item.email}}</td>
                <td class="p-3">edit</td>
            </tr>
        </tbody>
    </table>

    <div class="mt-4">
        <Link
        v-for="(item, index) in data.links"
        :key="'links'+index"
        v-html="item.label"
        class="px-3 py-2 rounded shadow"
        :href="item.url"
        :class="[!item.url?'bg-gray-200':'', data.current_page == item.label ? 'bg-blue-400 text-white' :'']"
        ></Link>
    </div>
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
