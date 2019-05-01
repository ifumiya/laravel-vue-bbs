<template>
    <div>
        <div>
            <span>{{ name }}</span>
            :
            <span>{{ message }}</span>
            --
            <span>{{ updated_at }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: '',
        message: '',
        updated_at: '',
    }
}
</script>
