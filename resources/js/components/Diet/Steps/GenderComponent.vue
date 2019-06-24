<template>
    <div class="col-12 row">
        <div class="col-5 offset-2">
            <img src="/images/woman.png" alt="woman" class="gender-img col-12" @click="select(0)">
        </div>
        <div class="col-5">
            <img src="/images/man.png" alt="man" class="gender-img col-12" @click="select(1)">
        </div>
        <!--<div class="mt-3 mb-3 col-12 row">-->
            <!--<button class="btn btn-primary col-6" @click="select">SELECT</button>-->
        <!--</div>-->
    </div>
</template>
<script>
    export default {
        methods: {
            select(genderId) {
                this.$emit('selected', {
                    'gender': genderId
                })
            }
        }
    }
</script>
<style scoped>
    .gender-img {
        cursor: pointer;
        border: 7px solid #158ed7;
        max-width: 250px;
        height: 250px;
        transition: 0.3s;
    }
    .gender-img:hover {
        border: 7px solid #2bc0a4!important;
    }
</style>
