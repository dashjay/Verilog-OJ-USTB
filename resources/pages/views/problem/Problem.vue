<template>
    <div class="flex-container">
        <div id="problem-main">
            <!--problem main-->
            <Kane :padding="40" shadow>
                <div slot="title">{{problem.title}}</div>
                <div id="problem-content" class="markdown-body" v-katex>
                    <p class="title">{{$t('m.Description')}}</p>
                    <p class="content" v-html=problem.description></p>
                    <!--                     {{$t('m.music')}}-->
                    <!--                    <p class="title">{{// $t('m.Input')}} <span v-if="problem.io_mode.io_mode=='File IO'">({{$t('m.FromFile')}}: {{ problem.io_mode.input }})</span>-->
                    <!--                    </p>-->
                    <p class="content" v-html=problem.content></p>

                    <!--          <p class="title">{{$t('m.Output')}} <span v-if="problem.io_mode.io_mode=='File IO'">({{$t('m.ToFile')}}: {{ problem.io_mode.output }})</span></p>-->
                    <!--          <p class="content" v-html=problem.output_description></p>-->

                    <!--          <div v-for="(sample, index) of problem.samples" :key="index">-->
                    <!--            <div class="flex-container sample">-->
                    <!--              <div class="sample-input">-->
                    <!--                <p class="title">{{$t('m.Sample_Input')}} {{index + 1}}-->
                    <!--                  <a class="copy"-->
                    <!--                     v-clipboard:copy="sample.input"-->
                    <!--                     v-clipboard:success="onCopy"-->
                    <!--                     v-clipboard:error="onCopyError">-->
                    <!--                    <Icon type="clipboard"></Icon>-->
                    <!--                  </a>-->
                    <!--                </p>-->
                    <!--                <pre>{{sample.input}}</pre>-->
                    <!--              </div>-->
                    <!--              <div class="sample-output">-->
                    <!--                <p class="title">{{$t('m.Sample_Output')}} {{index + 1}}</p>-->
                    <!--                <pre>{{sample.output}}</pre>-->
                    <!--              </div>-->
                    <!--            </div>-->
                    <!--          </div>-->

                    <!--          <div v-if="problem.hint">-->
                    <!--            <p class="title">{{$t('m.Hint')}}</p>-->
                    <!--            <Card dis-hover>-->
                    <!--              <div class="content" v-html=problem.hint></div>-->
                    <!--            </Card>-->
                    <!--          </div>-->


                    <div class="content">
                        <p class="title">你的做题情况</p>
                        <Timeline>
                            <TimelineItem v-for="solution in solutions" :key="solution">
                                <p class="time">{{solution.created_at}}</p>
                                <p class="content">{{solution.is_pass?'通过':'错误'}}</p>
                            </TimelineItem>
                        </Timeline>
                        <p class="content"></p>
                    </div>
                </div>
            </Kane>
            <!--problem main end-->
            <Card :padding="20" id="submit-code" dis-hover class="code-and-result">
                <CodeMirror :value.sync="code"
                            :theme="theme"
                            @resetCode="onResetToTemplate"
                            @changeTheme="onChangeTheme"
                            v-if="!submitted"
                ></CodeMirror>
                <Split v-model="split" v-if="submitted">
                    <div slot="left" class="demo-split-pane">
                        <Card style="padding-right: 10px;height: 500px">
                            <p slot="title">输出</p>
                            <div v-for="t in cmp_result" :key="t">
                                {{t}}
                            </div>
                        </Card>
                    </div>
                    <!--                    <Divider type="vertical" />-->
                    <div slot="right" class="demo-split-pane">
                        <Card style="padding-left: 10px;height: 500px">
                            <p slot="title">波形</p>
                            <div>Yours</div>
                            <iframe frameborder="0" height="200" width="450" :src="waveform" allowfullscreen
                                    v-if="graph"></iframe>
                            <div>Ref(Standard)</div>
                            <iframe frameborder="0" height="200" width="450" :src="waveform_standard" allowfullscreen
                                    v-if="graph"></iframe>
                        </Card>
                    </div>
                </Split>
                <Row type="flex" justify="space-between">
                    <Col :span="10">
                        <!--                        <div class="status" v-if="statusVisible">-->
                        <!--                            <template v-if="!this.contestID || (this.contestID && OIContestRealTimePermission)">-->
                        <!--                                <span>{{$t('m.Status')}}</span>-->
                        <!--                                <Tag type="dot" :color="submissionStatus.color"-->
                        <!--                                     @click.native="handleRoute('/status/'+submissionId)">-->
                        <!--                                    {{submissionStatus.text}}-->
                        <!--                                </Tag>-->
                        <!--                            </template>-->
                        <!--                            <template v-else-if="this.contestID && !OIContestRealTimePermission">-->
                        <!--                                <Alert type="success" show-icon>Submitted successfully</Alert>-->
                        <!--                            </template>-->
                        <!--                        </div>-->
                        <!--                        <div v-else-if="problem.my_status === 0">-->
                        <!--                            <Alert type="success" show-icon>You have solved the problem</Alert>-->
                        <!--                        </div>-->
                        <!--                        <div v-else-if="this.contestID && !OIContestRealTimePermission && submissionExists">-->
                        <!--                            <Alert type="success" show-icon>You have submitted a solution.</Alert>-->
                        <!--                        </div>-->
                        <!--                        <div v-if="contestEnded">-->
                        <!--                            <Alert type="warning" show-icon>Contest has ended</Alert>-->
                        <!--                        </div>-->
                    </Col>

                    <Col :span="12">
                        <!--                        <template v-if="captchaRequired">-->
                        <!--                            <div class="captcha-container">-->
                        <!--                                <Tooltip v-if="captchaRequired" content="Click to refresh" placement="top">-->
                        <!--                                    <img :src="captchaSrc" @click="getCaptchaSrc"/>-->
                        <!--                                </Tooltip>-->
                        <!--                                <Input v-model="captchaCode" class="captcha-code"/>-->
                        <!--                            </div>-->
                        <!--                        </template>-->
                        <Button :type="submit_color" icon="edit" :loading="submitting" @click="submitCode"
                                class="fl-right">
                            <span v-if="submitted">返回</span>
                            <span v-else>提交</span>
                        </Button>
                    </Col>
                </Row>
            </Card>
        </div>

        <div id="right-column">
            <VerticalMenu @on-click="handleRoute">
                <!--                <template v-if="this.contestID">-->
                <!--                    <VerticalMenu-item :route="{name: 'contest-problem-list', params: {contestID: contestID}}">-->
                <!--                        <Icon type="ios-photos"></Icon>-->
                <!--                        Problems-->
                <!--                    </VerticalMenu-item>-->

                <!--                    <VerticalMenu-item :route="{name: 'contest-announcement-list', params: {contestID: contestID}}">-->
                <!--                        <Icon type="chatbubble-working"></Icon>-->
                <!--                        Announcements-->
                <!--                    </VerticalMenu-item>-->
                <!--                </template>-->

                <!--                <VerticalMenu-item v-if="!this.contestID || OIContestRealTimePermission" :route="submissionRoute">-->
                <!--                    <Icon type="navicon-round"></Icon>-->
                <!--                    Submissions-->
                <!--                </VerticalMenu-item>-->

                <!--                <template v-if="this.contestID">-->
                <!--                    <VerticalMenu-item v-if="!this.contestID || OIContestRealTimePermission"-->
                <!--                                       :route="{name: 'contest-rank', params: {contestID: contestID}}">-->
                <!--                        <Icon type="stats-bars"></Icon>-->
                <!--                        Rankings-->
                <!--                    </VerticalMenu-item>-->
                <!--                    <VerticalMenu-item :route="{name: 'contest-details', params: {contestID: contestID}}">-->
                <!--                        <Icon type="home"></Icon>-->
                <!--                        View Contest-->
                <!--                    </VerticalMenu-item>-->
                <!--                </template>-->
            </VerticalMenu>

            <Card id="info">
                <div slot="title" class="header">
                    <Icon type="information-circled"></Icon>
                    <span class="card-title">{{$t('m.Information')}}</span>
                </div>
                <ul>
                    <li><p>ID</p>
                        <p>{{problem.id}}</p></li>
                    <!--                    <li>-->
                    <!--                        <p>{{$t('m.Time_Limit')}}</p>-->
                    <!--                        <p>{{problem.time_limit}}MS</p></li>-->
                    <!--                    <li>-->
                    <!--                        <p>{{$t('m.Memory_Limit')}}</p>-->
                    <!--                        <p>{{problem.memory_limit}}MB</p></li>-->
                    <!--                    <li>-->
                    <!--                    <li>-->
                    <!--                        <p>{{$t('m.IOMode')}}</p>-->
                    <!--                        <p>{{problem.io_mode.io_mode}}</p>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <p>{{$t('m.Created')}}</p>-->
                    <!--                        <p>{{problem.created_by}}</p></li>-->
                    <li v-if="problem.difficulty">
                        <p>{{$t('m.Level')}}</p>
                        <p>{{problem.difficulty}}</p></li>
                    <!--                    <li v-if="problem.total_score">-->
                    <!--                        <p>{{$t('m.Score')}}</p>-->
                    <!--                        <p>{{problem.total_score}}</p>-->
                    <!--                    </li>-->
                    <li>
                        <p>{{$t('m.Tags')}}</p>
                        <p>
                            <Poptip trigger="hover" placement="left-end">
                                <a>Show</a>
                                <div slot="content">
                                    <Tag v-for="tag in problem.tags" :key="tag">{{tag}}</Tag>
                                </div>
                            </Poptip>
                        </p>
                    </li>
                </ul>
            </Card>

            <!--            <Card id="pieChart" :padding="0" v-if="!this.contestID || OIContestRealTimePermission">-->
            <!--                <div slot="title">-->
            <!--                    <Icon type="ios-analytics"></Icon>-->
            <!--                    <span class="card-title">Statistic</span>-->
            <!--                    <Button type="ghost" size="small" id="detail" @click="graphVisible = !graphVisible">Details</Button>-->
            <!--                </div>-->
            <!--                <div class="echarts">-->
            <!--                    <ECharts :options="pie"></ECharts>-->
            <!--                </div>-->
            <!--            </Card>-->
        </div>

        <!--        <Modal v-model="graphVisible">-->
        <!--            <div id="pieChart-detail">-->
        <!--                <ECharts :options="largePie" :initOptions="largePieInitOpts"></ECharts>-->
        <!--            </div>-->
        <!--            <div slot="footer">-->
        <!--                <Button type="ghost" @click="graphVisible=false">Close</Button>-->
        <!--            </div>-->
        <!--        </Modal>-->
    </div>
</template>

<script>
    import env from '@/pages/const.js'
    import {mapGetters, mapActions} from 'vuex'
    // import {types} from '../../../../store'
    import CodeMirror from '@/pages/components/CodeMirror.vue'
    // import storage from '@/utils/storage'
    import {FormMixin} from '@/pages/components/mixins'
    // import {JUDGE_STATUS, CONTEST_STATUS, buildProblemCodeKey} from '@/utils/constants'
    import api from '@/pages/api'
    import {pie, largePie} from './chartData'

    // 只显示这些状态的图形占用
    const filtedStatus = ['-1', '-2', '0', '1', '2', '3', '4', '8'];

    export default {
        name: 'Problem',
        components: {
            CodeMirror
        },
        mixins: [FormMixin],
        data() {
            return {
                solutions: [],
                waveform: "",
                waveform_prefix: env.app_url + '/graph?wavedrom=',
                waveform_standard: '',
                cmp_result: [],
                split: 0.5,
                graph: false,
                statusVisible: false,
                captchaRequired: false,
                graphVisible: false,
                submissionExists: false,
                captchaCode: '',
                captchaSrc: '',
                contestID: '',
                problemID: '',
                submitting: false,
                submit_color: 'primary',
                code: '',
                language: 'Verilog',
                languages: ['Verilog'],
                theme: 'solarized',
                submissionId: '',
                submitted: false,
                result: {
                    result: 9
                },
                problem: {
                    title: '',
                    description: '',
                    hint: '',
                    my_status: '',
                    template: {},
                    languages: [],
                    created_by: {
                        username: ''
                    },
                    tags: [],
                    io_mode: {'io_mode': 'Standard IO'}
                },
                pie: pie,
                largePie: largePie,
                // echarts 无法获取隐藏dom的大小，需手动指定
                largePieInitOpts: {
                    width: '500',
                    height: '480'
                }
            }
        },
        // beforeRouteEnter(to, from, next) {
        //     let problemCode = storage.get(buildProblemCodeKey(to.params.problemID, to.params.contestID));
        //     if (problemCode) {
        //         next(vm => {
        //             vm.language = problemCode.language;
        //             vm.code = problemCode.code;
        //             vm.theme = problemCode.theme
        //         })
        //     } else {
        //         next()
        //     }
        // },
        mounted() {
            // this.$store.commit(types.CHANGE_CONTEST_ITEM_VISIBLE, {menu: false});
            this.init()
        },
        methods: {
            ...mapActions(['changeDomTitle']),
            init() {
                this.$Loading.start();
                // this.contestID = this.$route.params.contestID;
                this.problemID = this.$route.params.problemID;
                // let func = this.$route.name === 'problem-details' ? 'getProblem' : 'getContestProblem';
                api.getProblem(this.problemID).then(res => {
                    if (res.data.status) {
                        this.$Loading.finish();
                        let problem = res.data.object;
                        this.changeDomTitle({title: problem.title});
                        this.problem = problem;
                        this.code = problem.template;
                        api.getSolutions(this.problem.id)
                            .then(response => {
                                if (response.data.status) {
                                    this.solutions = response.data.object;
                                }
                            }).catch(error => {
                            this.$Notice.error({
                                title: '做题记录获取失败',
                                desc: error
                            })
                        })
                    }
                    // TODO子任务之后再说
                    // api.submissionExists(problem.id).then(res => {
                    //     this.submissionExists = res.data.data
                    // });
                    // problem.languages = problem.languages.sort();
                    // this.changePie(problem);
                    // 在beforeRouteEnter中修改了, 说明本地有code，无需加载template
                    // if (this.code !== '') {
                    //     return 0
                    // }
                    // try to load problem template
                    // this.language = this.problem.languages[0];
                    // let template = this.problem.template;
                    // if (template && template[this.language]) {
                    //     this.code = template[this.language]
                    // }
                }, () => {
                    this.$Loading.error()
                });
            },
            // changePie(problemData) {
            //     // 只显示特定的一些状态
            //     for (let k in problemData.statistic_info) {
            //         if (filtedStatus.indexOf(k) === -1) {
            //             delete problemData.statistic_info[k]
            //         }
            //     }
            //     let acNum = problemData.accepted_number;
            //     let data = [
            //         {name: 'WA', value: problemData.submission_number - acNum},
            //         {name: 'AC', value: acNum}
            //     ];
            //     this.pie.series[0].data = data;
            //     // 只把大图的AC selected下，这里需要做一下deepcopy
            //     let data2 = JSON.parse(JSON.stringify(data));
            //     data2[1].selected = true;
            //     this.largePie.series[1].data = data2;
            //
            //     // 根据结果设置legend,没有提交过的legend不显示
            //     let legend = Object.keys(problemData.statistic_info).map(ele => JUDGE_STATUS[ele].short);
            //     if (legend.length === 0) {
            //         legend.push('AC', 'WA')
            //     }
            //     this.largePie.legend.data = legend;
            //
            //     // 把ac的数据提取出来放在最后
            //     let acCount = problemData.statistic_info['0'];
            //     delete problemData.statistic_info['0'];
            //
            //     let largePieData = [];
            //     Object.keys(problemData.statistic_info).forEach(ele => {
            //         largePieData.push({name: JUDGE_STATUS[ele].short, value: problemData.statistic_info[ele]})
            //     });
            //     largePieData.push({name: 'AC', value: acCount});
            //     this.largePie.series[0].data = largePieData
            // },
            handleRoute(route) {
                this.$router.push(route)
            },
            // onChangeLang(newLang) {
            //     if (this.problem.template[newLang]) {
            //         if (this.code.trim() === '') {
            //             this.code = this.problem.template[newLang]
            //         }
            //     }
            //     this.language = newLang
            // },
            onChangeTheme(newTheme) {
                this.theme = newTheme
            },

            onResetToTemplate() {
                this.$Modal.confirm({
                    content: 'Are you sure you want to reset your code?',
                    onOk: () => {
                        alert('调试')
                        // let template = this.problem.template;
                        // if (template && template[this.language]) {
                        //     this.code = template[this.language]
                        // }
                    }
                })
            },
            // checkSubmissionStatus() {
            //     // 使用setTimeout避免一些问题
            //     if (this.refreshStatus) {
            //         // 如果之前的提交状态检查还没有停止,则停止,否则将会失去timeout的引用造成无限请求
            //         clearTimeout(this.refreshStatus)
            //     }
            //     const checkStatus = () => {
            //         let id = this.submissionId;
            //         api.getSubmission(id).then(res => {
            //             this.result = res.data.data;
            //             if (Object.keys(res.data.data.statistic_info).length !== 0) {
            //                 this.submitting = false;
            //                 this.submitted = false;
            //                 clearTimeout(this.refreshStatus);
            //                 this.init()
            //             } else {
            //                 this.refreshStatus = setTimeout(checkStatus, 2000)
            //             }
            //         }, res => {
            //             this.submitting = false;
            //             clearTimeout(this.refreshStatus)
            //         })
            //     };
            //     this.refreshStatus = setTimeout(checkStatus, 2000)
            // },
            //
            submitCode() {
                if (this.code.trim() === '') {
                    this.$error('Code can not be empty');
                    return
                }

                if (this.submitted) {
                    this.submit_color = 'primary';
                    this.submitted = false;
                    return 0;
                }
                // this.submissionId = '';
                // this.result = {result: 9};
                this.submit_color = 'warning';
                this.submitting = true;
                this.submitted = true;
                let data = {
                    id: this.problem.id,
                    code: this.code,
                };
                api.doSubmitSolution(this.problem.id, this.code)
                    .then(response => {
                        const info = () => {
                            let result = response.data.object;
                            this.cmp_result = result.cmpresult.split('\n');
                            this.waveform = this.waveform_prefix + result.signal;
                            this.graph = true;
                            // this.waveform_standard = this.waveform_prefix + result;
                        };
                        if (response.data.object.status) {
                            this.$Notice.info({
                                title: '编译成功',
                                desc: response.data.msg
                            });
                            info()
                        } else {
                            this.$Notice.error({
                                title: '编译成功 然而没有通过波形检测',
                                desc: response.data.msg
                            });
                            if (response.data.object !== null) {
                                info();
                            }
                        }

                    }).catch(error => {
                    console.log(error)
                }).finally(_ => {
                    this.submitting = false;
                    api.getStandardWavedrom(this.problem.id)
                        .then(response => {
                            if (response.data.status) {
                                this.$Notice.info({
                                    title: '获取标准波形成功',
                                    desc: response.data.msg
                                });
                                this.waveform_standard = this.waveform_prefix + response.data.object;
                            } else {
                                this.$Notice.error({
                                    title: '获取标准波形失败',
                                    desc: response.data.msg
                                });
                            }
                        }).catch(error => {
                        this.$Notice.error({
                            title: '获取标准波形失败',
                            desc: error
                        });
                    })
                })
                // if (this.captchaRequired) {
                //     data.captcha = this.captchaCode
                // }
                //     const submitFunc = (data, detailsVisible) => {
                //         this.statusVisible = true;
                //         api.submitCode(data).then(res => {
                //             this.submissionId = res.data.data && res.data.data.submission_id;
                //             // 定时检查状态
                //             this.submitting = false;
                //             this.submissionExists = true;
                //             if (!detailsVisible) {
                //                 this.$Modal.success({
                //                     title: 'Success',
                //                     content: 'Submit code successfully'
                //                 });
                //                 return
                //             }
                //             this.submitted = true;
                //             this.checkSubmissionStatus()
                //         }, res => {
                //             this.getCaptchaSrc();
                //             if (res.data.data.startsWith('Captcha is required')) {
                //                 this.captchaRequired = true
                //             }
                //             this.submitting = false;
                //             this.statusVisible = false
                //         })
                //     };
                //
                //     if (this.contestRuleType === 'OI' && !this.OIContestRealTimePermission) {
                //         if (this.submissionExists) {
                //             this.$Modal.confirm({
                //                 title: '',
                //                 content: '<h3>You have submission in this problem, sure to cover it?<h3>',
                //                 onOk: () => {
                //                     // 暂时解决对话框与后面提示对话框冲突的问题(否则一闪而过）
                //                     setTimeout(() => {
                //                         submitFunc(data, false)
                //                     }, 1000)
                //                 },
                //                 onCancel: () => {
                //                     this.submitting = false
                //                 }
                //             })
                //         } else {
                //             submitFunc(data, false)
                //         }
                //     } else {
                //         submitFunc(data, true)
                //     }
            },
            onCopy(event) {
                this.$success('Code copied')
            },
            onCopyError(e) {
                this.$error('Failed to copy code')
            }
        },
        computed: {
            // ...mapGetters(['problemSubmitDisabled', 'contestRuleType', 'OIContestRealTimePermission', 'contestStatus']),
            // contest() {
            //     return this.$store.state.contest.contest
            // },
            // contestEnded() {
            //     return this.contestStatus === CONTEST_STATUS.ENDED
            // },
            // submissionStatus() {
            //     return {
            //         text: JUDGE_STATUS[this.result.result]['name'],
            //         color: JUDGE_STATUS[this.result.result]['color']
            //     }
            // },
            // submissionRoute() {
            //     if (this.contestID) {
            //         return {name: 'contest-submission-list', query: {problemID: this.problemID}}
            //     } else {
            //         return {name: 'submission-list', query: {problemID: this.problemID}}
            //     }
            // }
        },
        // beforeRouteLeave(to, from, next) {
        //     // 防止切换组件后仍然不断请求
        //     clearInterval(this.refreshStatus);
        //
        //     this.$store.commit(types.CHANGE_CONTEST_ITEM_VISIBLE, {menu: true});
        //     storage.set(buildProblemCodeKey(this.problem._id, from.params.contestID), {
        //         code: this.code,
        //         language: this.language,
        //         theme: this.theme
        //     });
        //     next()
        // },
        watch: {
            '$route'() {
                this.init()
            }
        }
    }
</script>

<style lang="less" scoped>
    .card-title {
        margin-left: 8px;
    }

    .flex-container {
        #problem-main {
            flex: auto;
            margin-right: 18px;
        }

        #right-column {
            flex: none;
            width: 220px;
        }
    }

    #problem-content {
        margin-top: -50px;

        .title {
            font-size: 20px;
            font-weight: 400;
            margin: 25px 0 8px 0;
            color: #3091f2;

            .copy {
                padding-left: 8px;
            }
        }

        p.content {
            margin-left: 25px;
            margin-right: 20px;
            font-size: 15px
        }

        .sample {
            align-items: stretch;

            &-input, &-output {
                width: 50%;
                flex: 1 1 auto;
                display: flex;
                flex-direction: column;
                margin-right: 5%;
            }

            pre {
                flex: 1 1 auto;
                align-self: stretch;
                border-style: solid;
                background: transparent;
            }
        }
    }

    #submit-code {
        margin-top: 20px;
        margin-bottom: 20px;

        .status {
            float: left;

            span {
                margin-right: 10px;
                margin-left: 10px;
            }
        }

        .captcha-container {
            display: inline-block;

            .captcha-code {
                width: auto;
                margin-top: -20px;
                margin-left: 20px;
            }
        }
    }

    #info {
        margin-bottom: 20px;
        margin-top: 20px;

        ul {
            list-style-type: none;

            li {
                border-bottom: 1px dotted #e9eaec;
                margin-bottom: 10px;

                p {
                    display: inline-block;
                }

                p:first-child {
                    width: 90px;
                }

                p:last-child {
                    float: right;
                }
            }
        }
    }

    .fl-right {
        float: right;
    }

    #pieChart {
        .echarts {
            height: 250px;
            width: 210px;
        }

        #detail {
            position: absolute;
            right: 10px;
            top: 10px;
        }
    }

    #pieChart-detail {
        margin-top: 20px;
        width: 500px;
        height: 480px;
    }

    .code-and-result {
        width: 100%;
        height: 60vh;
    }
</style>

