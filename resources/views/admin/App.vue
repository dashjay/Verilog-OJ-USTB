<template>
    <div>
        <Row type="flex" justify="space-between" class="comp">
            <Col span="7">
                <Card class="content">
                    <p slot="title">标准答案</p>
                    <label>
                        <CodeMirror
                                :value.sync="code"
                                style="width: 400px;height: 100px"
                        ></CodeMirror>
                    </label>
                </Card>
            </Col>
            <Col span="7">
                <Card class="content">
                    <p slot="title">仿真激励</p>
                    <CodeMirror
                            :value.sync="stim"
                            style="width: 400px;height: 100px"
                            language="dockerfile"
                    ></CodeMirror>
                </Card>
            </Col>
            <Col span="7">
                <Card class="content">
                    <p slot="title">WaveDrom</p>
                    <iframe frameborder="0" height="400" width="450" :src="waveform" allowfullscreen
                            v-if="graph"></iframe>
                    <Button type="primary" style="float: right;margin-bottom: 10px">仿真生成图像</Button>
                </Card>
            </Col>
        </Row>
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
                graph: true,
                time: '2019',
                theme: 'solarized',
                language: 'C++',
                code: '',
                stim: '',
                waveform: "http://127.0.0.1:8000/graph?wavedrom={signal: [{name: 'P', wave: '.P......'},{name: 'a', wave: '=======', data: ['0', '2', '2', '1', '2', '2', '1', ]},{name: 'b', wave: '=======', data: ['0', '4', '6', '7', '8', '3', '4', ]},{name: 'c', wave: '=======', data: ['0', '6', '8', '8', '10','5', '5', ]}]}"
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
        margin-top: 100px;
    }
</style>
