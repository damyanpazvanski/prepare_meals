<template>
    <div class="col-12 meats">
        <div class="row mb-3" v-for="meatTitle in meatsTitles">
            <input type="checkbox" :id="meatTitle" :name="meatTitle" :value="meatTitle" v-model="meats">
            <label :for="meatTitle" class="col-11">{{ meatTitle }}</label>
        </div>

        <button class="btn btn-primary btn-block mt-3 mb-3" @click="select">Next</button>
    </div>
</template>
<script>
    export default {
        props: ['meatsTitles'],
        data() {
            return {
                meats: []
            }
        },
        methods: {
            select() {
                if (this.meats.length < 1) {
                    this.$emit('error');
                    return;
                }

                this.$emit('selected', {
                    'meats': this.meats
                })
            }
        }
    }
</script>
<style scoped>
    .meats .row {
        border: 2px solid;
    }
    .meats input {
        height: 30px;
        width: 30px;
        margin: 3px;
    }
    .meats label {
        cursor: pointer;
    }
</style>
