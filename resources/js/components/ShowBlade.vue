<template>
    <div>
        <h3>{{ this.blog[0].title }}</h3>
        <p>{{ this.blog[0].author }}</p>
        <p>{{ this.blog[0].created_at }}</p>
        <p>{{ this.blog[0].category }}</p>
        <p>{{ this.blog[0].body }}</p>
        <span>{{ this.blog[0].likes }}</span>
    </div>
</template>

<script>
export default {
    props: {
        blog: Array
    }
}
</script>