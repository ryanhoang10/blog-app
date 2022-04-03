<template>
    <div class="p-2">
        <h3 class="text-center mb-4">Login</h3>
        <form action="post" @submit.prevent="login" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="email">Email:</label>
                <input type="text" id="login-email">   
            </div>
            <div class="mb-4">
                <label for="password">Password:</label>
                <input type="password" id="login-password">   
            </div>
            <div class="text-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
            </div>
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