<template>
    <div>
        <header-component image-src="/images/banner/banner-1.jpg"></header-component>

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="static_main_content">
                                <div class="static_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>

                                <gender v-if="page === 1" @selected="selected"></gender>
                                <activity v-if="page === 2" @selected="selected"></activity>

                                <button class="btn btn-dark btn-lg btn-block" @click="back">Back</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="right_sidebar_area">
                                <aside class="right_widget r_cat_widget">
                                    <div class="r_w_title">
                                        <h3>{{ trans.steps }}</h3>
                                    </div>
                                    <ul>
                                        <li :class="{'active': page === 1}">{{ trans.gender }}</li>
                                        <li :class="{'active': page === 2}">{{ trans.activity }}</li>
                                        <li :class="{'active': page === 3}">{{ trans.what_meat_prefer }}</li>
                                        <li :class="{'active': page === 4}">{{ trans.what_vegetables_prefer }}</li>
                                        <li :class="{'active': page === 5}">{{ trans.what_products_prefer }}</li>
                                        <li :class="{'active': page === 6}">{{ trans.how_your_day_going }}</li>
                                        <li :class="{'active': page === 7}">{{ trans.how_many_meals }}</li>
                                        <li :class="{'active': page === 8}">{{ trans.measures }}</li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->
    </div>
</template>
<script>
    import Header from './HeaderComponent';

    import Gender from './Steps/GenderComponent';
    import Activity from './Steps/ActivityComponent';

    export default {
        props: ['trans'],
        components: {
            'header-component': Header,
            'gender': Gender,
            'activity': Activity,
        },
        data() {
            return {
                page: 1,
                userData: {},
            }
        },
        methods: {
            selected(data) {
                this.userData = Object.assign(this.userData, data);
                this.page++;
            },
            back() {
                this.page--;
            }
        }
    }
</script>
<style scoped>
    .active {
        background: turquoise;
    }
</style>
