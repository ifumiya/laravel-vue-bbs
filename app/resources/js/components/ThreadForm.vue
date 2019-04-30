<template>
    <div>
        <div class="root">
            <div class="name-row labeled-input">
                <label>Name:</label>
                <input type="text" class="name-input">
            </div>
            <div class="title-row labeled-input">
                <label>Title:</label>
                <input type="text" class="title-input">
            </div>
            <textarea class="message-input"></textarea>
            <input type="submit" class="submit-button">
        </div>
    </div>
</template>

<style scoped>

.root
{
    border: 1px solid gray;
    padding: 4px;
}

.labeled-input
{
    display: flex;
}

.labeled-input label
{
    width: 6em;
    text-align: right;
}

.labeled-input input
{
    flex-grow: 1;
}
.message-input
{
    width: 100%;
    height: 12em;
    box-sizing: border-box;
}


</style>

