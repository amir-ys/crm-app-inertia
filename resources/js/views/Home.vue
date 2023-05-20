<template>
   <div class="container">
       <div class="row">
           text
           تست تایپ فارسی
       </div>
   </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            items: [
                {
                    text: 'جدیدترین پست‌ها',
                    class: 'white--text'
                },
                {
                    text: 'پست‌های دوستان',
                    class: 'white--text'
                },
                {
                    text: 'استارتاپ',
                    class: 'blue--text text--lighten-4'
                },
                {
                    text: 'دلنوشته',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'زندگی',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'کتاب',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'برنامه نویسی',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'روانشناسی',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'حال خوبتو',
                    class: 'blue--text  text--lighten-4'
                },
                {
                    text: 'با من تقسیم کن',
                    class: 'blue--text  text--lighten-4'
                },
            ]
        }
    }
}
</script>

<style>
.v-toolbar__content {
    padding: 0 !important;
}
</style>
