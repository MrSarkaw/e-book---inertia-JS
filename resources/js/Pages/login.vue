<template>
   <div>
        <form @submit.prevent="store">
            <input v-model="form.email" type="text" placeholder="email">
            <p>{{ form.errors.email }}</p>
            <br>
            <input v-model="form.password" type="password" placeholder="******">
            <p>{{ form.errors.password }}</p>
    
            <button>login</button>
        </form>
   </div>
</template>


<script setup>
import { useForm } from "@inertiajs/vue3";


let form = useForm({
    email:'',
    password:'',
})

const store = ()=>{
    form.post(route('login'))
}

</script>

