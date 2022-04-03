<template>
    <div class="p-2">
        <h3>Login</h3>
        <form action="post" @submit.prevent="login">
            <label for="email">Email:</label>
            <input type="text" id="login-email">
            <label for="password">Password:</label>
            <input type="text" id="login-password">
            <button>Login</button>
        </form>
    </div>
</template>

<script>
export default {
    methods: {
        login: function() {
            alert('hello')
        }
    }
}
</script>