<template>
    <div>
        <Row type="flex" justify="space-between" class="comp">
            <Col span="7">
                <Card class="content">
                    <p slot="title">标准答案</p>
                    <label>
                        <CodeMirror
                                :value.sync="form.top_module"
                                style="width: 400px;height: 100px"
                        ></CodeMirror>
                    </label>
                </Card>
            </Col>
            <Col span="7">
                <Card class="content">
                    <p slot="title">仿真激励</p>
                    <CodeMirror
                            :value.sync="form.stim"
                            style="width: 400px;height: 100px"
                            language="dockerfile"
                    ></CodeMirror>
                </Card>
            </Col>
            <Col span="7">
                <Card style="height: 50%;width: 100%;margin-bottom: 5px">
                    <Spin size="large" fix v-if="loading"></Spin>
                    <p slot="title">输出</p>
                    <div v-for="line in output" :key="line">
                        <h4>{{line}}</h4>
                    </div>
                </Card>
                <Card style="height: 70%;width: 100%">
                    <Spin size="large" fix v-if="loading"></Spin>
                    <p slot="title">WaveDrom</p>
                    <iframe frameborder="0" height="400" width="450" :src="waveform" allowfullscreen
                            v-if="graph"></iframe>
                    <Button type="primary" style="float: right;margin-bottom: 10px" @click="doSubmit">仿真生成图像</Button>
                </Card>
            </Col>
        </Row>
        <Button type="warning"
                size="large"
                style="margin-left: 50%;margin-top: 10px;color: #000;"
                @click="complete">
            提交完成题目创建
        </Button>
    </div>
</template>

<script>
    import CodeMirror from './CodeMirror';

    export default {
        name: "App",
        components: {
            CodeMirror
        },
        data() {
            return {
                graph: false,
                time: '2019',
                loading: false,
                theme: 'solarized',
                language: 'C++',
                output: ['输出将显示于此'],
                form: {
                    top_module: '',
                    stim: '',
                    id: -1,
                    svg: ''
                },
                // waveform: "http://127.0.0.1:8000/graph?wavedrom={signal: [{name: 'P', wave: '.P......'},{name: 'a', wave: '=======', data: ['0', '2', '2', '1', '2', '2', '1', ]},{name: 'b', wave: '=======', data: ['0', '4', '6', '7', '8', '3', '4', ]},{name: 'c', wave: '=======', data: ['0', '6', '8', '8', '10','5', '5', ]}]}"
                waveform: '',
                signal: '',
                waveform_prefix: "http://127.0.0.1:8000/graph?wavedrom="

            }
        },
        methods: {
            doSubmit() {
                this.loading = true;
                this.graph = false;
                this.form.id = document.getElementById('problem_id').innerText;
                let newform = Object.assign({}, this.form);
                this.$http.post('/admin/problem/stim', newform)
                    .then(response => {
                        if (response.data.status) {
                            this.loading = false;
                            this.signal = response.data.signal;
                            console.log(this.signal);
                            this.waveform = this.waveform_prefix + response.data.signal;
                            this.graph = true;
                            this.output = response.data.cmpresult.split('\n')
                            if (response.data.svg !== '') {
                                this.form.svg = response.data.svg;
                            }
                        }
                    }).catch(error => {
                    this.loading = false;
                    this.$Notice.error({
                        title: 'ERROR',
                        desc: error
                    }).finally(_ => {
                        this.loading = false;
                    })
                })
            },
            complete() {
                let formdata = new FormData();
                formdata.append('id', this.form.id);
                formdata.append('top_module', this.form.top_module);
                formdata.append('stim', this.form.stim);
                formdata.append('wavedrom', this.signal);
                formdata.append('svg', this.form.svg);
                this.$http.post('/admin/problem/complete', formdata)
                    .then(response => {
                        if (response.data.status) {
                            this.$Notice.info({
                                title: '成功完成题目创建',
                                desc: response.data.msg
                            });
                            window.location.href = '/admin/problems/' + this.form.id;
                        } else {
                            this.$Notice.error({
                                title: '完成失败,刷新页面',
                                desc: response.data.msg
                            });
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        this.$Notice.error({
                            title: '完成失败,被迫刷新页面',
                            desc: error
                        });
                        window.location.reload();
                    })

            }
        },
        mounted() {
        }
    }
</script>

<style scoped>
    .content {

        width: 100%;
        height: 100%;
    }

    .comp {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: 10px;
    }
</style>
