<script setup>
import { useForm , Link} from '@inertiajs/vue3'
import ValidationError from "../Shared/validation-error.vue";
import {defineComponent} from "vue";

const props = defineComponent({ValidationError})

const form = useForm({
    email: null,
    password: null,
})

</script>

<template>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 mt-10">
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <div class="w-md-400px">

                        <div v-if="form.errors" v-for="error in form.errors" class="alert alert-danger">
                            {{ error }}
                        </div>

                        <form class="form w-100"
                              @submit.prevent="form.post('login')"
                              id="kt_sign_in_form">
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">ورود</h1>
                            </div>

                            <div class="fv-row">
                                <label for="email" class="col-form-label">ایمیل</label>
                                <input name="email" v-model="form.email" type="text"
                                       class="form-control"
                                       placeholder="ایمیل" autocomplete="email">
                            </div>


                            <div class="fv-row">
                                <label class="col-form-label">کلمه عبور</label>
                                <div
                                    class="input-group auth-pass-inputgroup">
                                    <input type="password" name="password" v-model="form.password"
                                           class="form-control"
                                           id="password" placeholder="کلمه عبور"
                                           aria-label="Password" aria-describedby="password-addon">
                                    <button class="btn btn-light btn-sm toggle-password" type="button"
                                            id="password-addon"><i
                                        class="fas fa-eye fa-eye-slash" id="eye-icon"></i></button>
                                </div>

                            </div>

                            <!--end::Input group=-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10 mt-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">ثبت نام</span>
                                    <!--end::Indicator label-->
                                </button>
                            </div>

                            <div class="text-center">
                                اکانت ندارید؟
                                <span class="text-danger">
                                    <Link href="/register"> ثبت نام</Link>
                                </span>
                                کنید
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                         src="/metro/assets/media/auth/agency.png" alt=""/>
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                         src="/metro/assets/media/auth/agency-dark.png" alt=""/>
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">سامانه مدیریت مشتریان</h1>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
</style>
