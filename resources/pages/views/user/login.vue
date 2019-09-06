<template>
    <div>
        <Form ref="formLogin" :model="formLogin" :rules="ruleLogin">
            <FormItem prop="username">
                <label>
                    <Input type="text" v-model="formLogin.username" :placeholder="$t('m.LoginUsername')" size="large"
                           @on-enter="handleLogin">
                        <Icon type="ios-person-outline" slot="prepend"></Icon>
                    </Input>
                </label>
            </FormItem>
            <FormItem prop="password">
                <label>
                    <Input type="password" v-model="formLogin.password" :placeholder="$t('m.LoginPassword')"
                           size="large"
                           @on-enter="handleLogin">
                        <Icon type="ios-locked-outline" slot="prepend"></Icon>
                    </Input>
                </label>
            </FormItem>
            <!--            <FormItem prop="tfa_code" v-if="tfaRequired">-->
            <!--                <label>-->
            <!--                    <Input v-model="formLogin.tfa_code" :placeholder="$t('m.TFA_Code')">-->
            <!--                        <Icon type="ios-lightbulb-outline" slot="prepend"></Icon>-->
            <!--                    </Input>-->
            <!--                </label>-->
            <!--            </FormItem>-->
        </Form>
        <div class="footer">
            <Button
                    type="primary"
                    @click="handleLogin"
                    class="btn" long
                    :loading="btnLoginLoading">
                {{$t('m.UserLogin')}}
            </Button>
            <a v-if="website.allow_register" @click.stop="handleBtnClick('register')">{{$t('m.No_Account')}}</a>
            <a @click.stop="goResetPassword" style="float: right">{{$t('m.Forget_Password')}}</a>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex'
    import api from '@/pages/api'
    import {FormMixin} from '@/pages/components/mixins'

    export default {
        mixins: [FormMixin],
        data() {
            // const CheckRequiredTFA = (rule, value, callback) => {
            //     if (value !== '') {
            //         api.tfaRequiredCheck(value).then(res => {
            //             this.tfaRequired = res.data.data.result
            //         })
            //     }
            //     callback()
            // };

            return {
                tfaRequired: false,
                btnLoginLoading: false,
                formLogin: {
                    username: '',
                    password: '',
                    //TODO TFA(twice Factor Auth)
                    // tfa_code: ''
                },
                ruleLogin: {
                    username: [
                        {required: true, trigger: 'blur'},
                    ],
                    password: [
                        {required: true, trigger: 'change', min: 6, max: 20}
                    ]
                }
            }
        },
        methods: {
            ...mapActions(['changeModalStatus', 'getProfile']),
            handleBtnClick(mode) {
                this.changeModalStatus({
                    mode,
                    visible: true
                })
            },
            handleLogin() {
                this.validateForm('formLogin').then(valid => {
                    //开始加载
                    this.btnLoginLoading = true;
                    //表单赋值
                    let formData = Object.assign({}, this.formLogin);

                    api.login(formData).then(res => {
                        if (res.data.status) {
                            this.btnLoginLoading = false;
                            this.changeModalStatus({visible: false});
                            this.getProfile();
                            this.$success('Welcome back to USTB OJ')
                        } else {
                            this.$error(res.data.msg);
                            this.btnLoginLoading = false;
                        }
                    }, _ => {
                        this.btnLoginLoading = false
                    })
                })
            },
            goResetPassword() {
                this.changeModalStatus({visible: false});
                this.$router.push({name: 'apply-reset-password'})
            }
        },
        computed: {
            ...mapGetters(['website', 'modalStatus']),
            visible: {
                get() {
                    return this.modalStatus.visible
                },
                set(value) {
                    this.changeModalStatus({visible: value})
                }
            }
        }
    }
</script>

<style scoped lang="less">
    .footer {
        overflow: auto;
        margin-top: 20px;
        margin-bottom: -15px;
        text-align: left;

        .btn {
            margin: 0 0 15px 0;

            &:last-child {
                margin: 0;
            }
        }
    }
</style>
