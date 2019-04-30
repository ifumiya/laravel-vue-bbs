<template>
    <div>
        <div class="root">
            <div class="btn btn-rel">&lt;</div>
            <div class="btn btn-abs">1</div>
            <div class="btn btn-abs">1</div>
            <div class="btn btn-rel">&gt;</div>
        </div>
    </div>
</template>

<style scoped>

.root
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 1em 0;
}

.btn
{
    margin: 1px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border: 1px solid gray;
    border-radius:  5px;
    cursor: pointer;
}

.btn:hover
{
    color: white;
    background: gray;
}
</style>

