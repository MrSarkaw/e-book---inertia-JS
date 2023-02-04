<template>
    <div class="bg-gray-100 p-2 roounded shadow">
        <p>User Form</p>

        <form @submit.prevent="store()">
            <div class="grid grid-cols-3 gap-10 mt-10">
                <div>
                    <label for="">Name</label>
                    <input v-model="form.name" type="text" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ errors.name }}</p>
                </div>

                <div>
                    <label for="">Email</label>
                    <input v-model="form.email" type="text" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ errors.email }}</p>
                </div>

                <div>
                    <label for="">Password</label>
                    <input v-model="form.password" type="password" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ errors.password }}</p>
                </div>
            </div>

            <div class="mt-10">
                <button class="p-2 rounded shadow bg-indigo-500 text-white px-5">Add</button>
            </div>
        </form>
    </div>
</template>
<script>
import layout from '@/layouts/admin.vue'
import { reactive, ref } from '@vue/reactivity'
import { router } from '@inertiajs/core'
export default{
    layout:layout
}

</script>


<script setup>

defineProps(['errors'])

let initilizeForm= {
    name:'',
    email:'',
    password:'',
}

let form = reactive({...initilizeForm})

const store = ()=>{
    router.post('/admin/user', form, {
        onSuccess: ()=>{
            Object.assign(form, initilizeForm)
        }
    })
}

</script>
