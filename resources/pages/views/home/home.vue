<template>
    <Row type="flex" justify="space-around">
        <Col :span="22">
            <!--            <panel shadow v-if="contests.length" class="contest">-->
            <!--                <div slot="title">-->
            <!--                    <Button type="text" class="contest-title" @click="goContest">{{contests[index].title}}</Button>-->
            <!--                </div>-->
            <!--                <Carousel v-model="index" trigger="hover" autoplay :autoplay-speed="6000" class="contest">-->
            <!--                    <CarouselItem v-for="(contest, index) of contests" :key="index">-->
            <!--                        <div class="contest-content">-->
            <!--                            <div class="contest-content-tags">-->
            <!--                                <Button type="info" shape="circle" size="small" icon="calendar">-->
            <!--                                    {{contest.start_time | localtime('YYYY-M-D HH:mm') }}-->
            <!--                                </Button>-->
            <!--                                <Button type="success" shape="circle" size="small" icon="android-time">-->
            <!--                                    {{getDuration(contest.start_time, contest.end_time)}}-->
            <!--                                </Button>-->
            <!--                                <Button type="warning" shape="circle" size="small" icon="trophy">-->
            <!--                                    {{contest.rule_type}}-->
            <!--                                </Button>-->
            <!--                            </div>-->
            <!--                            <div class="contest-content-description">-->
            <!--                                <blockquote v-html="contest.description"></blockquote>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </CarouselItem>-->
            <!--                </Carousel>-->
            <!--            </panel>-->
            <Announcement class="announcement"></Announcement>
        </Col>
    </Row>
</template>


<script>
    import Announcement from './Announcement.vue'

    export default {
        name: "home",
        components: {
            Announcement
        }
    }
</script>

<style lang="less" scoped>
    .contest {
        &-title {
            font-style: italic;
            font-size: 21px;
        }

        &-content {
            padding: 0 70px 40px 70px;

            &-description {
                margin-top: 25px;
            }
        }
    }

    .announcement {
        margin-top: 20px;
    }
</style>

