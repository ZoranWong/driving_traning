<template>
    <div class="row" style="margin: 8px;">
        <div class="row" style="margin: 12px;">
            <el-button type="primary" icon="el-icon-plus" @click="createChannel">新建推广渠道</el-button>
        </div>
        <el-row :gutter="12">
            <el-col v-for="item in channels" :span="8" :key="item.slug">
                <el-card shadow="always">
                    <el-col :span="8">
                        <qr-code :value="item.url" :options="{ size: 120 }"></qr-code>
                    </el-col>
                    <el-col :span="12">
                        <el-row>
                            <label class="col-6 card-item-title">渠道标示:</label><span>{{ item.slug }}</span>
                        </el-row>
                        <el-row>
                            <label class="col-6 card-item-title">渠道名称:</label><span>{{ item.name }}</span>
                        </el-row>
                        <el-row>
                            <label class="col-6 card-item-title">推广链接:</label><a :href="item.url">{{ item.url }}</a>
                        </el-row>
                    </el-col>
                    <el-button type="text" @click="updateChannel(item)">编辑</el-button>
                </el-card>
            </el-col>
        </el-row>
        <div class="dialog">
            <el-dialog
                    :title="dialogTitle"
                    :visible.sync="dialogVisible"
                    :before-close="handleClose">
                <el-form ref="form" :model="channel" label-width="120px">
                    <el-form-item label="渠道唯一标示">
                        <el-input v-model="channel.slug" placeholder="请输入渠道唯一标示（字母或数组组成）"
                                  :rules="[{ required: true, message: '渠道标示不能为空', trigger: 'blur' }]"></el-input>
                    </el-form-item>
                    <el-form-item label="渠道名称">
                        <el-input v-model="channel.name" placeholder="请输入渠道名称"
                                  :rules="[{ required: true, message: '渠道名称不能为空', trigger: 'blur' }]"></el-input>
                    </el-form-item>
                    <el-form-item label="推广页面URL" >
                        <el-input v-model="channel.url" placeholder="请输入推广页面URL"></el-input>
                    </el-form-item>
                </el-form>
                <span slot="footer" class="dialog-footer">
                    <el-button @click="dialogVisible = false">取 消</el-button>
                    <el-button type="primary" @click="onSubmit">提 交</el-button>
                </span>
            </el-dialog>
        </div>
    </div>
</template>

<script>
    import VueQrcode from '@xkeshi/vue-qrcode';

    export default {
        name: "ChannelsComponent",
        components: {
            'qr-code': VueQrcode
        },
        props:['channels'],
        data(){
            return {
                dialogTitle: '',
                dialogVisible:false,
                channel:{
                    id: null,
                    slug: '',
                    name: '',
                    url: ''
                },
                isCreateChannel: false,
            };
        },
        mounted() {
            this.getChannels();
        },
        methods: {
            handleClose() {
                this.dialogVisible = false;
            },
            createChannel() {
                this.dialogTitle = '新建渠道';
                this.dialogVisible = true;
                this.channel.slug = null;
                this.channel.name = null;
                this.channel.url = null;
                this.channel.id = null;
                this.isCreateChannel = true;
            },
            updateChannel(channel) {
                this.dialogTitle = '渠道编辑';
                this.dialogVisible = true;
                this.channel.slug = channel.slug;
                this.channel.name = channel.name;
                this.channel.url = channel.url;
                this.channel.id = channel.id;
                this.isCreateChannel = false;
            },
            async onSubmit() {
                let data = {
                    name: this.channel.name,
                    slug: this.channel.slug,
                    url: this.channel.url
                };
                if(this.isCreateChannel) {
                    this.create(data);
                }else {
                   this.update(data);
                }
            },
            async create(data) {
                if(this.channel.slug && this.channel.name) {
                    try {
                        let response = await this.axios.post('/channel', data);
                        let channel = response.data.data;
                        if(channel) {
                            this.channels.push(channel);
                            this.success('渠道创建成功');
                        }
                    }catch (e) {
                        console.log(e);
                        this.fail('渠道创建失败')
                    }

                }
            },
            async update(data) {
                try {
                    let response = await this.axios.put(`/channel/${this.channel.id}`, data);
                    this.channel = $.extend(this.channel, response.data.data);
                    if(this.channel) {
                        this.success('渠道更新成功');
                    }
                }catch (e) {
                    console.log(e);
                    this.fail('渠道更新失败')
                }

            },
            async getChannels() {
                let response = await this.axios.get('/channels');
                this.channels = response.data.data;
            },
            success(message) {
                let self = this;
                this.$message({
                    message: message,
                    type: 'success',
                    onClose() {
                        self.dialogVisible = false;
                    }
                });
            },
            fail(message) {
                this.$message({
                    message: message,
                    type: 'error'
                });
            }
        }
    }
</script>

<style scoped>
    .card-item-title {
        margin: 8px;
    }
</style>