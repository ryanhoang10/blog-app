<template>
    <div class="container">
        <div v-for="(item, blog) in blogs" :key="blog">
            <div v-if="blog == 0" class="mt-4 border border-sky-500">
                <h3 class="text-center text-lg">{{ item.title }}</h3>
                <div>
                    <p>{{ item.body }}</p>
                    <p><b>Written By:</b>  {{ item.author }}</p>   
                    <div class="flex justify-between mt-2">
                        <p>{{ item.likes }}</p>
                        <p>{{ item.created_at }}</p>    
                    </div>
                    
                </div>   
            </div>
            <div v-else class="flex justify-between">
                <!-- <h3>{{ item.title }}</h3>
                <div>
                    <p>{{ item.body }}</p>
                    <p>{{ item.author }}</p>   
                    <div class="flex justify-between">
                        <p>{{ item.likes }}</p>
                        <p>{{ item.created_at }}</p>    
                    </div>
                </div>    -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ello mounted.')
        },
        props: {
            blogs: Array
        }
    }
</script>
