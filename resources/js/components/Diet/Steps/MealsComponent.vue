<template>
    <ul class="activities col-12 text-center">
        <li class="bnt btn-outline-primary btn-sm" @click="select(0)">1 time</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(1)">2 times</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(2)">3 times</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(3)">4 times</li>
        <li class="bnt btn-outline-primary btn-sm" @click="select(4)">Every day is different</li>
    </ul>
</template>
<script>
    export default {
        methods: {
            select(mealId) {
                this.$emit('selected', {
                    'gender': mealId
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
