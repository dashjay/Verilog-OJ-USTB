import {Home, Problem, ProblemList} from '../views'


export default [
    {
        name: 'home',
        path: '/',
        meta: {title: 'Home'},
        component: Home
    },
    {
        name: 'problem-list',
        path: '/problems',
        meta: {title: 'Problem List'},
        component: ProblemList
    },
    {
        name: 'problem-details',
        path: '/problem/:problemID',
        meta: {title: 'Problem Details'},
        component: Problem
    },
]
