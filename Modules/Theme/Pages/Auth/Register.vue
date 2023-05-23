<template>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/metro/assets/media/auth/agency.png" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/metro/assets/media/auth/agency-dark.png" alt="" />
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                </div>
            </div>
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <div class="w-md-400px">
                        <form class="form w-100" method="POST" action=""  id="kt_sign_in_form">
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            </div>
                            <div class="separator separator-content my-14">
                                <span class="w-150px text-gray-500 fw-semibold fs-7">with username</span>
                            </div>
                            <div class="fv-row">
                                <label for="username" class="col-form-label">Username</label>
                                <input name="username" type="text"
                                       class="form-control is-invalid"
                                       value="" id="username"
                                       placeholder="Enter Username" autocomplete="username" autofocus>
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-md-5">
                                <!--begin::Password-->
                                <label class="col-form-label">Password</label>
                                <div
                                    class="input-group auth-pass-inputgroup is-invalid">
                                    <input type="password" name="password"
                                           class="form-control  @error('password') is-invalid @enderror"
                                           id="userpassword" placeholder="Enter password"
                                           aria-label="Password" aria-describedby="password-addon">
                                    <button class="btn btn-light btn-sm toggle-password" type="button" id="password-addon" ><i
                                        class="fas fa-eye fa-eye-slash" id="eye-icon"></i></button>
                                </div>
                                <!--end::Password-->
                            </div>


                            <div class="form-check mb-md-5">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10 ">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Sign In</span>
                                    <!--end::Indicator label-->
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "register"
}
</script>

<style scoped>

</style>
