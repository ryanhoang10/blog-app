<template>
    <div class="p-2">
        <h3 class="text-center mb-4">Register</h3>
        <form action="post" @submit.prevent="register" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="email">Email:</label>
                <input type="text" id="register-email" v-model="form.registerEmail">    
            </div>
            <div class="mb-4">
                <label for="password">Password:</label>
                <input type="password" id="register-password" v-model="form.registerPassword" v-on:blur="validatePasswordLength">    
            </div>
            <div class="mb-4">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="register-confirm-password" v-model="form.registerConfirmPassword" v-on:blur="validatePasswordMatch">    
            </div>
            <div class="text-center">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            formErrors: [],
            form: {
                registerEmail: null,
                registerPassword: null,
                registerConfirmPassword: null,
                passwordMatch: false,
                passwordLength: false,
            }
        }
    },
    methods: {
        register: function() {
            if (this.form.passwordMatch && this.form.passwordLength)
                console.log('hello')
            // axios.post('/user/register', this.form)
        },
        validatePasswordLength: function() {
            if (this.form.registerPassword.length >= 8) this.form.passwordLength = true;
            else console.log('password too short')
            // else return this.formErrors = 'Password length is shorter than 8 characters.';
        },
        validatePasswordMatch: function() {
            if (this.form.registerPassword === this.form.registerConfirmPassword) this.form.passwordMatch = true;
            else console.log('password do not match')
            // else return this.formErrors = 'Passwords do not match.';
            // console.log(this.form.registerPassword, this.form.registerConfirmPassword)
        }
    }
}
</script>