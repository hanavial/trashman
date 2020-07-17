import Home from '../views/Home'
import Create from '../views/Create'

export default {
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/new',
            name: 'create',
            component: Create
        },
    ]
}
