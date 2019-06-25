<template>
    <ul class="activities col-12 text-center">
        <li class="bnt btn-outline-primary btn-sm" @click="select(0)">At the office</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(1)">At the office but I often go out</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(2)">I walk almost whole day</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(3)">Physical labor</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(4)">I stay almost whole day at home</li>
    </ul>
</template>
<script>
    export default {
        methods: {
            select(routineId) {
                this.$emit('selected', {
                    'routine': routineId
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
