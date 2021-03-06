<template>
    <Row type="flex" :gutter="18">
        <Col :span=19>
            <Kane shadow>
                <div slot="title">Problem List</div>
                <div slot="extra">
                    <ul class="filter">
                        <li>
                            <Dropdown @on-click="filterByDifficulty">
              <span>{{query.difficulty === '' ? 'Difficulty' : query.difficulty}}
                <Icon type="ios-arrow-down"/>
              </span>
                                <Dropdown-menu slot="list">
                                    <Dropdown-item name="">All</Dropdown-item>
                                    <Dropdown-item name="Low">Low</Dropdown-item>
                                    <Dropdown-item name="Mid">Mid</Dropdown-item>
                                    <Dropdown-item name="High">High</Dropdown-item>
                                </Dropdown-menu>
                            </Dropdown>
                        </li>
                        <li>
                            <i-switch size="large" @on-change="handleTagsVisible">
                                <span slot="open">Tags</span>
                                <span slot="close">Tags</span>
                            </i-switch>
                        </li>
                        <li>
                            <label>
                                <Input v-model="query.keyword"
                                       @on-enter="filterByKeyword"
                                       @on-click="filterByKeyword"
                                       placeholder="keyword"
                                       icon="ios-search-strong"/>
                            </label>
                        </li>
                        <li>
                            <Button type="primary" @click="onReset">
                                <Icon type="refresh"></Icon>
                                Reset
                            </Button>
                        </li>
                    </ul>
                </div>
                <Table style="width: 100%; font-size: 16px;"
                       :columns="problemTableColumns"
                       :data="problemList"
                       :loading="loadings.table"
                       disabled-hover></Table>
            </Kane>
            <Pagination :total="total" :page-size="limit" @on-change="pushRouter"
                        :current.sync="query.page"></Pagination>

        </Col>

        <Col :span="5">
            <Panel :padding="10">
                <div slot="title" class="taglist-title">Tags</div>
                <Button v-for="tag in tagList"
                        :key="tag.name"
                        @click="filterByTag(tag.name)"
                        type="primary"
                        :disabled="query.tag === tag.name"
                        shape="circle"
                        class="tag-btn">{{tag.name}}
                </Button>

                <Button long id="pick-one" @click="pickone">
                    <Icon type="md-shuffle"/>
                    Pick one
                </Button>
            </Panel>
            <Spin v-if="loadings.tag" fix size="large"></Spin>
        </Col>
    </Row>
</template>

<script>
    import {mapGetters} from 'vuex'
    import api from '@/pages/api'
    import utils from '@/utils/utils'
    import {ProblemMixin} from '@/pages/components/mixins'
    import Pagination from '@/pages/components/Pagination'

    export default {
        name: 'ProblemList',
        mixins: [ProblemMixin],
        components: {
            Pagination
        },
        data() {
            return {
                tagList: [],
                problemTableColumns: [
                    {
                        title: '#',
                        key: 'id',
                        width: 80,
                        render: (h, params) => {
                            return h('Button', {
                                props: {
                                    type: 'text',
                                    size: 'large'
                                },
                                on: {
                                    click: () => {
                                        this.$router.push({
                                            name: 'problem-details',
                                            params: {problemID: params.row.id}
                                        })
                                    }
                                },
                                style: {
                                    padding: '2px 0'
                                }
                            }, params.row.id)
                        }
                    },
                    {
                        title: 'Title',
                        width: 400,
                        render: (h, params) => {
                            return h('Button', {
                                props: {
                                    type: 'text',
                                    size: 'large'
                                },
                                on: {
                                    click: () => {
                                        this.$router.push({
                                            name: 'problem-details',
                                            params: {problemID: params.row.id}
                                        })
                                    }
                                },
                                style: {
                                    padding: '2px 0',
                                    overflowX: 'auto',
                                    textAlign: 'left',
                                    width: '100%'
                                }
                            }, params.row.title)
                        }
                    },
                    {
                        title: 'Level',
                        render: (h, params) => {
                            let t = params.row.difficulty;
                            let color = 'blue';
                            if (t === 'Low') color = 'green';
                            else if (t === 'High') color = 'yellow';
                            return h('Tag', {
                                props: {
                                    color: color
                                }
                            }, params.row.difficulty)
                        }
                    },
                    {
                        title: 'Total',
                        key: 'total'
                    },
                    // {
                    //     title: 'AC Rate',
                    //     render: (h, params) => {
                    //         return h('span', this.getACRate(params.row.accepted_number, params.row.submission_number))
                    //     }
                    // }
                ],
                problemList: [],
                limit: 20,
                total: 0,
                loadings: {
                    table: true,
                    tag: true
                },
                routeName: '',
                query: {
                    keyword: 'HELLO',
                    difficulty: '',
                    tag: '',
                    page: 1
                }
            }
        },
        mounted() {
            this.init();
        },
        methods: {
            init(simulate = false) {
                this.routeName = this.$route.name;
                let query = this.$route.query;

                this.query.difficulty = query.difficulty || '';
                this.query.keyword = query.keyword || '';
                this.query.tag = query.tag || '';
                this.query.page = parseInt(query.page) || 1;
                if (this.query.page < 1) {
                    this.query.page = 1
                }
                if (!simulate) {
                    this.getTagList()
                }
                this.getProblemList()
            },
            pushRouter() {
                this.$router.push({
                    name: 'problem-list',
                    query: utils.filterEmptyValue(this.query)
                })
            },
            //获取所有问题
            getProblemList() {
                let offset = (this.query.page - 1) * this.limit;
                this.loadings.table = true;
                api.getProblemList(offset, this.limit, this.query).then(res => {
                    let problemList = [];
                    if (res.data.status) {
                        this.loadings.table = false;
                        this.total = res.data.object.count;
                        let temp = res.data.object.problems;

                        for (let i = 0; i < temp.length; i++) {
                            api.getSolutionInfo(temp[i].id).then(response => {
                                temp[i].total = response.data.object.total;
                                problemList.push(temp[i])
                            })
                        }
                    }

                    this.problemList = problemList;


                    // if (this.isAuthenticated) {
                    //     this.addStatusColumn(this.problemTableColumns, res.data.data.results)
                    // }

                }).finally(res => {
                    this.loadings.table = false
                })
            },
            getTagList() {
                api.getProblemTagList().then(res => {
                    this.tagList = res.data.object;
                    this.loadings.tag = false
                }, res => {
                    this.loadings.tag = false
                })
            },
            filterByTag(tagName) {
                this.query.tag = tagName;
                this.query.page = 1;
                this.pushRouter()
            },
            filterByDifficulty(difficulty) {
                this.query.difficulty = difficulty;
                this.query.page = 1;
                this.pushRouter()
            },
            filterByKeyword() {
                this.query.page = 1;
                this.pushRouter()
            },
            // 控制Tag的显示和隐藏
            handleTagsVisible(value) {
                if (value) {
                    this.problemTableColumns.push(
                        {
                            title: 'Tags',
                            align: 'center',
                            render: (h, params) => {
                                let tags = [];
                                params.row.tags.forEach(tag => {
                                    tags.push(h('Tag', {}, tag))
                                });
                                return h('div', {
                                    style: {
                                        margin: '8px 0'
                                    }
                                }, tags)
                            }
                        })
                } else {
                    this.problemTableColumns.splice(this.problemTableColumns.length - 1, 1)
                }
            },
            onReset() {
                this.$router.push({name: 'problem-list'})
            },
            pickone() {
                api.pickone().then(res => {
                    this.$success('Good Luck');
                    this.$router.push({
                        name: 'problem-details',
                        params: {problemID: res.data.object}
                    })
                })
            }
        },
        computed: {
            ...mapGetters(['isAuthenticated'])
        },
        watch: {
            '$route'(newVal, oldVal) {
                if (newVal !== oldVal) {
                    this.init(true)
                }
            },
            'isAuthenticated'(newVal) {
                if (newVal === true) {
                    this.init()
                }
            }
        }
    }
</script>

<style scoped lang="less">
    .taglist-title {
        margin-left: -10px;
        margin-bottom: -10px;
    }

    .tag-btn {
        margin-right: 5px;
        margin-bottom: 10px;
    }

    #pick-one {
        margin-top: 10px;
    }
</style>
