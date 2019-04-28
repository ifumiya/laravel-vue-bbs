<template>
    <div>
        <div class="comment-form">
            <input type="text" class="name">
            <input type="text" class="message">
            <input type="submit" class="submit">
        </div>
    </div>
</template>

<style scoped>

.comment-form
{
    display: flex;
}

.name
{
    width: 10em;
}

.message
{
    flex-grow: 1;
}


</style>
