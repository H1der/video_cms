import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Home from '@/components/Home'
import Video from '@/components/Video'
import Page from '@/components/Page'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/video',
            name: 'Video',
            component: Video
        },
        {
            path: '/page',
            name: 'Page',
            component: Page
        },
    ]
})
