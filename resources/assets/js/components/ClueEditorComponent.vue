<template>
    <div class="box box-info">
        <div class="box-body">
            <!-- Color Picker -->
            <el-form ref="form" :model="clueItem">
                <el-form-item label="线索渠道" class="col-xs-12 col-md-6">
                    <el-select v-model="clueItem.channel.name" placeholder="请选择线索渠道">
                        <el-option v-for="channel in channels" :label="channel.name" :value="channel.slug"></el-option>
                    </el-select>
                </el-form-item>

                <el-form-item label="学员姓名" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.customer_name" placeholder="请输入学员姓名"></el-input>
                </el-form-item>

                <el-form-item label="学员电话" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.customer_mobile" placeholder="请输入学员电话" type="number"></el-input>
                </el-form-item>

                <el-form-item label="驾照类型" class="col-xs-12 col-md-6">
                    <el-select v-model="clueItem.driving_license_type" placeholder="请选择驾照类型">
                        <el-option label="A1" value="A1"></el-option>
                        <el-option label="A2"  value="A2"></el-option>
                        <el-option label="A3"  value="A3"></el-option>
                        <el-option label="B1"  value="B1"></el-option>
                        <el-option label="B2"  value="B2"></el-option>
                        <el-option label="C1"  value="C1"></el-option>
                        <el-option label="C2"  value="C2"></el-option>
                        <el-option label="C3"  value="C3"></el-option>
                        <el-option label="D"  value="D"></el-option>
                        <el-option label="E"  value="E"></el-option>
                        <el-option label="F"  value="F"></el-option>
                        <el-option label="M"  value="M"></el-option>
                        <el-option label="N"  value="N"></el-option>
                        <el-option label="P" value="P"></el-option>
                    </el-select>
                </el-form-item>

                <el-form-item label="客户意向度" class="col-xs-12 col-md-6">
                    <el-select v-model="clueItem.intention" placeholder="请选择客户意向度">
                        <el-option label="无意向" value="NEED_NOT"></el-option>
                        <el-option label="潜在客户"  value="POTENTIAL"></el-option>
                        <el-option label="高意向客户"  value="HIGH_DEMAND"></el-option>
                        <el-option label="低意向客户"  value="LOW_DEMAND"></el-option>
                        <el-option label="无人接听"  value="NO_ANSWER"></el-option>
                        <el-option label="成交"  value="DEAL"></el-option>
                    </el-select>
                </el-form-item>

                <el-form-item label="学车计划" class="col-xs-12 col-md-6">
                    <el-select v-model="clueItem.customer_plan" placeholder="请选择学车计划">
                        <el-option label="已学车"  value="HED_BEEN"></el-option>
                        <el-option label="一周" value="ONE_WEEK"></el-option>
                        <el-option label="一个月" value="ONE_MONTH"></el-option>
                        <el-option label="三个月" value="THREE_MONTH"></el-option>
                        <el-option label="六个月" value="SIX_MONTH"></el-option>
                        <el-option label="无计划" value="NOT_PLAN"></el-option>
                    </el-select>
                </el-form-item>

                <el-form-item label="学员位置" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.address" placeholder="请输入学员位置"></el-input>
                </el-form-item>

                <el-form-item label="意向驾校" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.want_driving_school" placeholder="请输入意向驾校"></el-input>
                </el-form-item>

                <el-form-item label="推荐驾校" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.driving_school" placeholder="请输入推荐驾校"></el-input>
                </el-form-item>

                <el-form-item label="学员预算" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.plan_fee" type="number" placeholder="请输入报价"></el-input>
                </el-form-item>

                <el-form-item label="报价" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.quoted_price" type="number" placeholder="请输入学员预算"></el-input>
                </el-form-item>

                <el-form-item label="驾校低价" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.base_price" type="number" placeholder="请输入驾校低价"></el-input>
                </el-form-item>

                <el-form-item label="成交价格" class="col-xs-12 col-md-6">
                    <el-input v-model="clueItem.deal_price" type="number" placeholder="请输入成交价格"></el-input>
                </el-form-item>

                <el-form-item label="成交时间" class="col-xs-12 col-md-6">
                    <el-date-picker type="date" placeholder="请输入成交时间" v-model="clueItem.deal_time" ></el-date-picker>
                </el-form-item>

                <el-form-item label="开发记录" class="col-xs-12">
                    <el-input v-model="clueItem.follow_up_record" type="textarea" placeholder="请输入开发记录"></el-input>
                </el-form-item>


            </el-form>
        </div>
        <!-- /.box-body -->
    </div>
</template>

<script>
    export default {
        name: "ClueEditorComponent",
        props: ['clueItem', 'channels']
    }
</script>

<style scoped>

</style>