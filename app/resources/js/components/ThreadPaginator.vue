<template>
    <div>
        <div class="root">
            <div class="btn btn-rel">&lt;</div>
            <div
                class="btn btn-abs"
                :class="{current: page + 1 === threadPage}"
                v-for="page in pages" :key="page"
            >
                {{ page + 1 }}
            </div>
            <div class="btn btn-rel">&gt;</div>
        </div>
    </div>
</template>

<script>
import {mapState, mapActions} from 'vuex';
export default {
    computed: {
        ...mapState(['threadPage', 'threadPagesCount']),
        pages() {
            return Array(this.threadPagesCount)
                .keys();
        },
    }
}
</script>


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

.btn:hover,
.current
{
    color: white;
    background: gray;
}
</style>

