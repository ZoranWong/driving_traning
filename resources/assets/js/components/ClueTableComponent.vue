<template>
    <div class = "row">
        <div class="block">
            <el-table
                    :data="currentPageItems"
                    border
                    style="width: 100%">
                <el-table-column
                        prop="id"
                        label="ID">
                </el-table-column>
                <el-table-column
                        prop="customer_name"
                        label="学员姓名">
                </el-table-column>
                <el-table-column
                        prop="customer_mobile"
                        label="学员手机">
                        <a href="#">scope.row.customer_mobile</a>
                </el-table-column>
                <el-table-column
                        prop="channel"
                        label="线索渠道"
                        :formatter="channelFormatter">
                </el-table-column>
                <el-table-column
                        prop="driving_license_type"
                        label="驾照类型">
                </el-table-column>
                <el-table-column
                        prop="follow_up_time"
                        label="跟进时间">
                </el-table-column>
                <el-table-column
                        prop="follow_up_record"
                        label="跟进记录">
                </el-table-column>
                <el-table-column
                        prop="intention"
                        label="意向度"
                        :formatter="intentionFormatter">
                </el-table-column>
                <el-table-column
                        prop="customer_plan"
                        label="学车计划"
                        :formatter="planFormatter">
                </el-table-column>
                <el-table-column
                        prop="address"
                        label="学员地址">
                </el-table-column>
                <el-table-column
                        prop="want_driving_school"
                        label="学员意向驾校">
                </el-table-column>
                <el-table-column
                        prop="driving_school"
                        label="推荐/报名驾校">
                </el-table-column>
                <el-table-column
                        prop="plan_fee"
                        label="预算">
                </el-table-column>
                <el-table-column
                        prop="quoted_price"
                        label="报价">
                </el-table-column>
                <el-table-column
                        prop="deal_price"
                        label="成交价">
                </el-table-column>
                <el-table-column
                        prop="deal_price"
                        label="低价">
                </el-table-column>
                <el-table-column
                        prop="profit"
                        label="利润">
                </el-table-column>
                <el-table-column label="操作">
                    <template slot-scope="scope">
                        <div class="btn-group">
                            <el-button
                                    size="mini"
                                    @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                            <el-button
                                    size="mini"
                                    type="danger"
                                    @click="handleDelete(scope.$index, scope.row)">删除</el-button>
                        </div>
                    </template>
                </el-table-column>
            </el-table>
        </div>
        <div class="block">
            <el-pagination
                    @current-change="handleCurrentChange"
                    :current-page.sync="currentPage"
                    :page-size="pageSize"
                    layout="total, prev, pager, next"
                    :total="totalPage">
            </el-pagination>
        </div>
        <el-dialog
                title=""
                :visible.sync="dialogVisible"
                width="30%"
                :before-close="handleClose">
            <clue-editor :clueItem="selectedItem"></clue-editor>
        </el-dialog>

    </div>
</template>

<script>
    export default {
        name: "ClueTableComponent",
        data() {
            return {
                clues: {},
                totalPage: 1,
                currentPage: 1,
                pageSize: 15,
                currentPageItems: null,
                dialogVisible: false,
                selectedItem:null
            }
        },
        watch: {
            currentPage() {
                console.log('current page change');
            },
            clues(o, n) {
                console.log('clues change');
            }
        },
        computed: {
        },
        mounted () {
            this.getClues();
        },
        methods: {
            handleEdit(index, item) {
                this.selectedItem = item;
                this.dialogVisible = true;
            },
            handleDelete() {

            },
            handleCurrentChange() {
                this.getClues();
            },
            async getClues() {
                let response = await this.axios.get(`/clues?page=${this.currentPage}&limit=${this.pageSize}`);
                response = response.data;
                this.currentPageItems = this.clues['_'+this.currentPage] = response.data;
                console.log('change items 1');
                this.total = response.total;
                console.log(this.clues);
                this.totalPage = response.last_page;
                console.log(this.currentPageItems);
            },
            intentionFormatter(row, column) {
                let $value = row[column.property];
                switch ($value) {
                    case 'NEED_NOT': {
                        return '无意向';
                    }
                    case 'POTENTIAL': {
                        return '潜在客户';
                    }
                    case 'HIGH_DEMAND': {
                        return '高意向客户';
                    }
                    case 'LOW_DEMAND': {
                        return '低意向客户';
                    }
                    case 'NO_ANSWER': {
                        return '无人接听';
                    }
                    case 'DEAL': {
                        return '成交';
                    }
                }
            },
            planFormatter(row, column, cellValue, index) {
                let $value = row[column.property];
                switch ($value) {
                    case 'HAD_BEEN': {
                        return '已学车';
                    }
                    case 'ONE_WEEK': {
                        return '一周';
                    }
                    case 'ONE_MONTH': {
                        return '一个月';
                    }
                    case 'THREE_MONTH': {
                        return '三个月';
                    }
                    case 'SIX_MONTH': {
                        return '六个月';
                    }
                    case 'NOT_PLAN': {
                        return '无计划';
                    }
                }
            },
            channelFormatter(row, column, cellValue, index) {
                let $value = row[column.property];
                switch ($value) {
                    case 'baidu': {
                        return '百度推广';
                    }
                    case 'toutiao': {
                        return '今日头条';
                    }
                    case 'wx_quan': {
                        return '微信朋友圈';
                    }
                    case 'wx_qun': {
                        return '微信群';
                    }
                    case 'chelun': {
                        return '车轮驾考通';
                    }
                    case 'baodian': {
                        return '驾考宝典';
                    }
                    case 'owner': {
                        return '平台推广';
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>