<template>
    <div class="bg-gray-100 p-2 roounded shadow">
        <p class="mb-6">User Form</p>
        <Link :href="route('admin.users.index')" class="p-2 px-4 bg-blue-600 text-white font-bold">Back</Link>

        <form @submit.prevent="store()">
            <div class="grid grid-cols-3 gap-10 mt-10">
                <div>
                    <label for="">Name</label>
                    <input v-model="form.name" type="text" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ form.errors.name }}</p>
                </div>

                <div>
                    <label for="">Email</label>
                    <input v-model="form.email" type="text" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ form.errors.email }}</p>
                </div>

                <div>
                    <label for="">Password</label>
                    <input v-model="form.password" type="password" class="bg-white p-2 shadow w-full">
                    <p class="text-red-500 text-sm">{{ form.errors.password }}</p>
                </div>
            </div>

            <div class="mt-10">
                <button :disabled="form.processing" class="p-2 rounded shadow bg-indigo-500 text-white px-5">Add</button>
            </div>
        </form>
    </div>
</template>
<script>
import layout from '@/layouts/admin.vue'
import { reactive, ref } from '@vue/reactivity'
import { router } from '@inertiajs/core'
import { Link, useForm } from '@inertiajs/vue3'
export default{
    layout: layout,
    components: { Link }
}

</script>


<script setup>

let form = useForm({
    name:'',
    email:'',
    password:'',
})

const store = ()=>{
    form.post(route('admin.users.store'),{
        onSuccess: ()=>{
            form.reset();
        }
    })
}

</script>
