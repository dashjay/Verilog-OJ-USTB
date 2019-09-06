<template>
    <Kane shadow :padding="10">
        <div slot="title">
            {{title}}
        </div>
        <div slot="extra">
            <Button v-if="listVisible" type="info" @click="init" :loading="btnLoading">{{$t('m.Refresh')}}</Button>
            <Button v-else type="primary" icon="ios-undo" @click="goBack">{{$t('m.Back')}}</Button>
        </div>

        <transition-group name="announcement-animate" mode="in-out">
            <div class="no-announcement" v-if="!announcements.length" key="no-announcement">
                <p>{{$t('m.No_Announcements')}}</p>
            </div>
            <template v-if="listVisible">
                <ul class="announcements-container" key="list">
                    <li v-for="announcement in announcements" :key="announcement.title">
                        <div class="flex-container">
                            <div class="title"><a class="entry" @click="goAnnouncement(announcement)">
                                {{announcement.title}}</a></div>
                            <div class="date">{{announcement.created_at}}</div>
                            <div class="creator"> By {{announcement.created_by}}</div>
                        </div>
                    </li>
                </ul>
                <Pagination
                        key="page"
                        :total="total"
                        :page-size="limit"
                        @on-change="getAnnouncementList">
                </Pagination>
                <!--                TODO 页码的问题之后再来处理-->
            </template>

            <template v-else>
                <div v-katex v-html="announcement.content" key="content" class="content-container markdown-body"></div>
            </template>
        </transition-group>
    </Kane>
</template>

<script>
    import api from '@/pages/api'
    import Pagination from '_c/Pagination.vue'

    export default {
        name: "Announcement",
        components: {
            Pagination
        },
        data() {
            return {
                announcements: [],
                announcemen: '',
                btnLoading: false,
                listVisible: true,
                limit: 5
            }
        },
        computed: {
            title() {
                return 'Announcement'
            },
            total() {
                return this.announcements.length;
            }
        },
        methods: {
            init() {
                console.log('init');
                this.getAnnouncementList();
            },
            goBack() {
                this.listVisible = true;
                this.announcement = ''
            },
            goAnnouncement(announcement) {
                this.announcement = announcement;
                this.listVisible = false
            },
            getAnnouncementList() {
                api.getAnnouncement().then(res => {
                    if (res.data.status) {
                        this.announcements = res.data.object;
                        this.$Notice.info({
                            title: 'announcement get successfully',
                            desc: res.data.msg
                        })
                    } else {
                        this.$Notice.error({
                            title: 'announcement get fail',
                            desc: res.data.msg
                        })
                    }
                }).catch(error => {
                    this.$Notice.error({
                        title: 'announcement get fail',
                        desc: error
                    })
                })
            }
        }, mounted() {
            this.init();
        }
    }
</script>

<style scoped lang="less">
    .announcements-container {
        margin-top: -10px;
        margin-bottom: 10px;

        li {
            padding-top: 15px;
            list-style: none;
            padding-bottom: 15px;
            margin-left: 20px;
            font-size: 16px;
            border-bottom: 1px solid rgba(187, 187, 187, 0.5);

            &:last-child {
                border-bottom: none;
            }

            .flex-container {
                .title {
                    flex: 1 1;
                    text-align: left;
                    padding-left: 10px;

                    a.entry {
                        color: #495060;

                        &:hover {
                            color: #2d8cf0;
                            border-bottom: 1px solid #2d8cf0;
                        }
                    }
                }

                .creator {
                    flex: none;
                    width: 200px;
                    text-align: center;
                }

                .date {
                    flex: none;
                    width: 200px;
                    text-align: center;
                }
            }
        }
    }

    .content-container {
        padding: 0 20px 20px 20px;
    }

    .no-announcement {
        text-align: center;
        font-size: 16px;
    }

    changeLocale
    .announcement-animate-enter-active {
        animation: fadeIn 1s;
    }
</style>
