<template>
    <ul class="activities col-12 text-center">
        <li class="bnt btn-outline-primary btn-sm" @click="select(0)">Almost nothing</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(1)">I often walk around</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(2)">I workout 1-2 times per week</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(3)">I workout 3-5 times per week</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(4)">I workout 5-7 times per week</li>
    </ul>
</template>
<script>
    export default {
        methods: {
            select(activityId) {
                this.$emit('selected', {
                    'activity': activityId
                })
            }
        }
    }
</script>
<style scoped>
    .activities li {
        cursor: pointer;
        margin-bottom: 10px;
        font-weight: 700;
        border: 2px solid;
        transition: 0.3s;
    }
</style>
