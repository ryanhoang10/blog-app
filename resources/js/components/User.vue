<template>
    <div class="flex justify-around">
        <login></login>
        <Register></Register>
    </div>
</template>

<script>
import Login from './Login.vue';
import Register from './Register.vue';

export default {
    components: {
        Login,
        Register,
    }
}
</script>