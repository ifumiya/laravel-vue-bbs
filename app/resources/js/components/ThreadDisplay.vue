<template>
    <div>
        <div class="root">
            <h2 class="thread-title">title</h2>
            <div class="thread">
                <div class="properties">
                    <span class="property">author</span>
                    <span class="property">date</span>
                </div>
                <p class="message-body">
                    message
                </p>
            </div>
            <div class="comments">
                <comment-display name="a" message="abc" date="2012-12-34 00:12:34"/>
                <comment-display name="b" message="abc" date="2012-12-34 00:12:34"/>
                <comment-display name="c" message="abc" date="2012-12-34 00:12:34"/>
                <comment-display name="d" message="abc" date="2012-12-34 00:12:34"/>
                <comment-form/>
            </div>
        </div>
    </div>
</template>

<style scoped>

.root
{
    margin: 1em 0px;
    border: 1px solid gray;
}

.thread
{
    position: relative;
}

.thread-title
{
    background: gray;
    color: white;
    margin: 0px;
    padding-left: 1em;
}

.properties
{
    text-align: right;
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
}

.property
{
    font-size: 80%;
    margin-right: 1px;
}

.message-body
{
    margin: 0;
}


</style>

