<template>
    <div>
        <div class="static_img">
            <img class="img-fluid" src="/images/static-1.jpg" alt="">
        </div>
        <div class="static_text">
            <p>Choose Activity</p>
            <button class="btn btn-primary" @click="select">SELECT</button>
        </div>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                activity: 1
            }
        },
        methods: {
            select() {
                this.$emit('selected', {
                    'gender': this.activity
                })
            }
        }
    }
</script>
