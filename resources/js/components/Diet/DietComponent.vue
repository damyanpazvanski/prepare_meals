<template>
    <div>
        <div class="roller-wrapper" v-if="loader">
            <div class="roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>

        <header-component image-src="/images/banner/banner-1.jpg"></header-component>

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="static_main_content">
                                <div class="static_social">
                                    <ul class="diet-steps-counter" v-if="!isLastPage">
                                        <li :class="{'active': page === 1}">1</li>
                                        <li :class="{'active': page === 2}">2</li>
                                        <li :class="{'active': page === 3}">3</li>
                                        <li :class="{'active': page === 4}">4</li>
                                        <li :class="{'active': page === 5}">5</li>
                                        <li :class="{'active': page === 6}">6</li>
                                        <li :class="{'active': page === 7}">7</li>
                                        <li :class="{'active': page === 8}">8</li>
                                    </ul>
                                </div>

                                <div class="col-12" v-if="hasError">
                                    <div class="alert alert-danger">All fields are required!</div>
                                </div>

                                <gender v-if="page === 1" @selected="selected"></gender>
                                <measures v-if="page === 2" @selected="selected" @error="error"></measures>
                                <activity v-if="page === 3" @selected="selected"></activity>
                                <daily-routine v-if="page === 4" @selected="selected"></daily-routine>
                                <meats v-if="page === 5" @selected="selected" @error="error" :meats-titles="trans.meats"></meats>
                                <vegetables v-if="page === 6" @selected="selected" @error="error" :vegetables-titles="trans.vegetables"></vegetables>
                                <fruits v-if="page === 7" @selected="selected" @error="error" :fruits-titles="trans.fruits"></fruits>
                                <products v-if="page === 8" @selected="selected" @error="error" :products-titles="trans.products"></products>
                                <meals v-if="page === 9" @selected="selected"></meals>

                                <last-page v-if="isLastPage" :data="userData"></last-page>

                                <button class="btn btn-dark btn-lg btn-block mt-4" v-if="!isLastPage" @click="back">Back</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="right_sidebar_area" v-if="!isLastPage">
                                <aside class="right_widget r_cat_widget">
                                    <div class="r_w_title">
                                        <h3>{{ trans.steps }}</h3>
                                    </div>
                                    <ul class="diet-steps-counter">
                                        <li :class="{'active': page === 1}">{{ trans.gender }}</li>
                                        <li :class="{'active': page === 2}">{{ trans.measures }}</li>
                                        <li :class="{'active': page === 3}">{{ trans.activity }}</li>
                                        <li :class="{'active': page === 4}">{{ trans.how_your_day_going }}</li>
                                        <li :class="{'active': page === 5}">{{ trans.what_meat_prefer }}</li>
                                        <li :class="{'active': page === 6}">{{ trans.what_vegetables_prefer }}</li>
                                        <li :class="{'active': page === 7}">{{ trans.what_fruits_prefer }}</li>
                                        <li :class="{'active': page === 8}">{{ trans.what_products_prefer }}</li>
                                        <li :class="{'active': page === 9}">{{ trans.how_many_meals }}</li>
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
    import Measures from './Steps/MeasuresComponent';
    import Activity from './Steps/ActivityComponent';
    import DailyRoutine from './Steps/DailyRoutineComponent';
    import Meats from './Steps/MeatsComponent';
    import Vegetables from './Steps/VegetablesComponent';
    import Fruits from './Steps/FruitsComponent';
    import Products from './Steps/ProductsComponent';
    import Meals from './Steps/MealsComponent';

    import LastPage from './Steps/LastPageComponent';

    export default {
        props: ['trans'],
        components: {
            LastPage,
            'header-component': Header,
            'gender': Gender,
            'activity': Activity,
            'daily-routine': DailyRoutine,
            'meals': Meals,
            'measures': Measures,
            'meats': Meats,
            'vegetables': Vegetables,
            'fruits': Fruits,
            'products': Products,
            'last-page': LastPage
        },
        data() {
            return {
                page: 1,
                maxPages: 10,
                userData: {},
                hasError: false,
                isLastPage: false,
                loader: false,
            }
        },
        methods: {
            selected(data) {
                this.hasError = false;
                this.userData = Object.assign(this.userData, data);
                this.page++;

                if (this.page === this.maxPages) {
                    this.loader = true;

                    setTimeout(() => {
                        this.loader = false;
                        this.isLastPage = true;
                    }, 3000);
                }
            },
            back() {
                if (this.page === 1) {
                    return;
                }

                this.page--;
            },
            error() {
                this.hasError = true;
            }
        }
    }
</script>
<style scoped>
    .active {
        background: #2bc0a4!important;
    }
    .diet-steps-counter li {
        font-weight: 700;
        color: #FFFFFF;
        background: #3490dc;
        padding: 5px 14px;
        border-radius: 10px;
        margin-bottom: 10px;
    }
</style>
