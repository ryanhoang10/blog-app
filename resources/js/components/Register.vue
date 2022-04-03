<template>
    <div class="p-2">
        <h3 class="text-center mb-4">Register</h3>
        <form action="post" @submit.prevent="register" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="email">Email:</label>
                <input type="text" id="register-email">    
            </div>
            <div class="mb-4">
                <label for="password">Password:</label>
                <input type="password" id="register-password">    
            </div>
            <div class="mb-4">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="register-confirm-password">    
            </div>
            <div class="text-center">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</button>
            </div>
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