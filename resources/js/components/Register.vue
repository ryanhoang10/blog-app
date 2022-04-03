<template>
    <div class="p-2">
        <h3>Register</h3>
        <form action="post" @submit.prevent="register">
            <label for="email">Email:</label>
            <input type="text" id="register-email">
            <label for="password">Password:</label>
            <input type="text" id="register-password">
            <label for="confirm-password">Confirm Password:</label>
            <input type="text" id="register-confirm-password">
            <button>Register</button>
        </form>
    </div>
</template>

<script>
export default {
    methods: {
        register: function() {

        }
    }
}
</script>