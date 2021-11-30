import Vue from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      render: h => h(App, props),
    }).$mount(el);
  },
});
