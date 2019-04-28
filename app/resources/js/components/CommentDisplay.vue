<template>
    <div>
        <div>
            <span>{{ name }}</span>
            :
            <span>{{ message }}</span>
            --
            <span>{{ date }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: '',
        message: '',
        date: '',
    }
}
</script>
