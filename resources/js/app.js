require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

// Font Awesome
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faBars, faBell, faCartPlus, faDatabase, faHome, faImages, faInfo, faInfoCircle, faLayerGroup, faPhoneAlt, faPlus, faPlusSquare, faSearch, faSignInAlt, faSignOutAlt, faStore, faTachometerAlt, faThumbsUp, faTimes} from '@fortawesome/free-solid-svg-icons';
import { faUser } from '@fortawesome/free-regular-svg-icons';
import { faFacebook, faInstagram, faTwitter, faWhatsapp } from '@fortawesome/free-brands-svg-icons';

library.add(faHome, faTachometerAlt, faUser, faTimes, faPlusSquare, faPlus, faPhoneAlt, faInfo, faSignInAlt, faInfoCircle,faFacebook, faInstagram, faTwitter, faWhatsapp, faSearch, faCartPlus, faSignInAlt, faSignOutAlt, faDatabase, faThumbsUp, faBell, faImages, faStore,faLayerGroup, faBars)

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';



createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('font-awesome', FontAwesomeIcon)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });


// Imported and Initialized Animation on scroll
import AOS from 'aos';
import 'aos/dist/aos.css';
// initailized
AOS.init();