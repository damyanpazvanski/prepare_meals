<template>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <label for="age">{{ measureFields.age }} <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.age" id="age" name="age" class="form-control" :placeholder="measureFields.age">
            </div>
            <div class="col-6">
                <label for="height">{{ measureFields.height }} <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.height" id="height" name="height" class="form-control" :placeholder="measureFields.height">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label for="weight">{{ measureFields.weight }} <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.weight" id="weight" name="weight" class="form-control" :placeholder="measureFields.weight">
            </div>
            <div class="col-6">
                <label for="wantedWeight">{{ measureFields.wanted_weight }} <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.wantedWeight" id="wantedWeight" name="wanted_weight" class="form-control" :placeholder="measureFields.wanted_weight">
            </div>
        </div>
        <span class="required-field-star">{{ measureFields.note }}</span>
        <button class="btn btn-primary btn-block mt-3 mb-3" @click="select">Next</button>
    </div>
</template>
<script>
    export default {
        props: ['measureFields'],
        data() {
            return {
                measures: {
                    age: '',
                    height: '',
                    weight: '',
                    wantedWeight: ''
                }
            }
        },
        methods: {
            select() {
                for (let key in this.measures) {
                    if (this.measures[key].length < 1 && this.measures[key] < 1) {
                        this.$emit('error');
                        return;
                    }
                }

                this.$emit('selected', {
                    'measures': this.measures
                })
            }
        }
    }
</script>
