Nova.booting((Vue, router, store) => {
    Vue.component('index-progress-bar', require('./components/IndexField'))
    Vue.component('detail-progress-bar', require('./components/DetailField'))
    Vue.component('form-progress-bar', require('./components/FormField'))
})
