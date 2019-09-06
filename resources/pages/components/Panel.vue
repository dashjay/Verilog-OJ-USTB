<template>
    <Card :padding="padding" :shadow="shadow" :dis-hover="disHover" :bordered="bordered">
        <div slot="title" class="panel-title">
            <slot name="title"></slot>
        </div>
        <div slot="extra" class="panel-extra">
            <slot name="extra"></slot>
        </div>
        <div class="panel-body">
            <slot></slot>
        </div>
    </Card>
</template>

<script>
    export default {
        name: 'Kane',
        props: {
            shadow: {
                required: false,
                type: Boolean,
                default: false
            },
            padding: {
                required: false,
                type: Number,
                default: 0
            },
            disHover: {
                required: false,
                type: Boolean,
                default: false
            },
            bordered: {
                required: false,
                type: Boolean,
                default: true
            }
        }
    }
</script>


<style lang="less">
    html {
        background-color: #eee;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", "微软雅黑", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: #eee;
        min-width: 900px;
    }

    .flex-container {
        display: flex;
        width: 100%;
        max-width: 100%;
        justify-content: space-around;
        align-items: flex-start;
        flex-flow: row nowrap;
    }

    .section-title {
        font-size: 21px;
        font-weight: 500;
        padding-top: 10px;
        padding-bottom: 20px;
        line-height: 30px;
    }

    .separator {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        border: 1px dashed #eee;
    }

    .oj-captcha {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        width: 100%;
        height: 36px;

        .oj-captcha-code {
            flex: auto;
        }

        .oj-captcha-img {
            margin-left: 10px;
            padding: 3px;
            flex: initial;
        }
    }

    .oj-relative {
        position: relative;
    }

    a.emphasis {
        color: #495060;

        &:hover {
            color: #2d8cf0;
        }
    }

    // for mathjax
    .MathJax {
        outline: 0;
    }

    .MathJax_Display {
        overflow-x: auto;
        overflow-y: hidden;
    }

    .markdown-body {
        h1, h2, h3, h4 {
            color: #111111;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5, p {
            margin-bottom: 15px;
            padding: 0;
        }

        h1 {
            font-size: 28px;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 14px;
        }

        a {
            color: #0099ff;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }

        ul, ol {
            padding: 0;
            margin: 10px 20px;
        }

        ul {
            list-style-type: disc;
        }

        ol {
            list-style-type: decimal;
        }

        li {
            line-height: 24px;
        }

        li ul, li ul {
            margin-left: 24px;
        }

        p, ul, ol {
            font-size: 16px;
            line-height: 24px;
        }

        pre {
            padding: 5px 10px;
            white-space: pre-wrap;
            margin-top: 15px;
            margin-bottom: 15px;
            background: #f8f8f9;
            border: 1px dashed #e9eaec;
        }

        code {
            font-size: 90%;
            padding: 2px 5px;
            margin: 0;
            background-color: rgba(27, 31, 35, 0.05);
            border-radius: 3px;
            line-height: 1.5;
        }

        pre > code {
            padding: 0;
            margin: 0;
            font-size: 100%;
            word-break: normal;
            white-space: pre;
            background: transparent;
            border: 0;
        }

        aside {
            display: block;
            float: right;
            width: 390px;
        }

        blockquote {
            border-left: 3px solid #bbbec4;
            padding-left: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #7b7b7b;
        }

        hr {
            width: 540px;
            text-align: left;
            margin: 0 auto 0 0;
            color: #999;
        }

        table {
            border-collapse: collapse;
            margin: 1em 1em;
            border: 1px solid #ccc;

            thead {
                background-color: #eee;

                td {
                    color: #666;
                }
            }

            td {
                padding: 0.5em 1em;
                border: 1px solid #ccc;
            }
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate(0, 50px);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .panel-title {
        .section-title;
        padding: 5px 15px;
    }

    .panel-extra {
        line-height: 40px;

        .ivu-input-icon {
            line-height: 40px;
        }

        ul.filter {
            > li {
                display: inline-block;
                padding: 0 10px;
            }
        }
    }

    .panel-body {
        word-break: break-all;
        word-wrap: break-word;
    }
</style>
