Nova.booting((Vue, router) => {
    Vue.component('index-form-header', require('./components/IndexField'));
    Vue.component('detail-form-header', require('./components/DetailField'));
    Vue.component('form-form-header', require('./components/FormField'));
})
