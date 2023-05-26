<template>
    <MobileHeader></MobileHeader>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <AsideMenu></AsideMenu>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <Topbar></Topbar>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <slot></slot>
                        </div>
                    </div>
                </div>
                <Footer></Footer>
            </div>
        </div>
    </div>
    <Profile></Profile>
    <Notification></Notification>
    <ScrollTop></ScrollTop>
</template>
<script setup>
import {defineComponent} from "vue";
import AsideMenu from "./Layouts/AsideMenu.vue";
import Footer from "./Layouts/Footer.vue";
import Topbar from "./Layouts/Topbar.vue";
import ScrollTop from "./Layouts/ScrollTop.vue";
import Profile from "./Layouts/Profile.vue";
import Notification from "./Layouts/Notification.vue";
import MobileHeader from "./Layouts/MobileHeader.vue";
defineComponent({
    AsideMenu,
    Footer,
    Topbar ,
    ScrollTop ,
    Profile ,
    Notification ,
    MobileHeader
})
</script>
