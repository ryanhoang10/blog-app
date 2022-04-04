<template>
    <div>
        <div class="flex justify-end" v-if="this.user != ''">
            <div class="mr-4">hi {{ this.user}}</div>
            <div class="mx-4 cursor-pointer" v-on:click="logout">Logout</div>
        </div>
        <div class="flex justify-end" v-else>
            <div class="mx-4 cursor-pointer" v-on:click="login">Login</div>
        </div>
        <h1 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center cursor-pointer" v-on:click="returnToHome">{{ title }}</h1>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props: {
            title: String,
            user: String,
        }, 
        methods: {
            returnToHome: function() {
                window.location = "/";
            },
            logout: function() {
                console.log('hello')
                axios.post('/user/logout')
                    .then((response) => {
                        alert(response.data.message);
                        location.reload();
                    })
                    .catch((error) => {
                        console.log(failed)
                    })
            },
            login: function() {
                window.location = '/user/login'
            }
        }
    }
</script>
