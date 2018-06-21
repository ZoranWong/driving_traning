<template>
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">学员线索编辑</h3>
        </div>
        <div class="box-body">
            <!-- Color Picker -->
            <div class="form-group col-xs-12 col-md-6 col-lg-4 flex-md-column">
                <label >线索渠道:</label>
                <select class=" form-control">
                    <option value="baidu">百度推广</option>
                    <option value="toutiao">今日头条</option>
                    <option value="wx_quan">微信朋友圈</option>
                    <option value="wx_qun">微信群</option>
                    <option value="chelun">车轮驾考通</option>
                    <option value="baodian">驾考宝典</option>
                    <option value="owner">平台推广</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4 flex-md-column">
                <label >学员姓名:</label>
                <input  type="text" class=" form-control">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >学员电话:</label>
                <input  type="number" class="form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >驾照类型:</label>
                <select class="form-control">
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                    <option value="N">N</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >客户意向度:</label>
                <select class="col-md-8 form-control">
                    <option value="NEED_NOT">无意向</option>
                    <option value="POTENTIAL">潜在客户</option>
                    <option value="HIGH_DEMAND">高意向客户</option>
                    <option value="LOW_DEMAND">低意向客户</option>
                    <option value="NO_ANSWER">无人接听</option>
                    <option value="DEAL">成交</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >学车计划:</label>
                <select class="form-control">
                    <option value="HED_BEEN">已学车</option>
                    <option value="ONE_WEEK">一周</option>
                    <option value="ONE_MONTH">一个月</option>
                    <option value="THREE_MONTH">三个月</option>
                    <option value="SIX_MONTH">六个月</option>
                    <option value="NOT_PLAN">无计划</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >学员位置:</label>
                <input type="text" class="form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >意向驾校:</label>
                <input type="text" class=" form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >推荐驾校:</label>
                <input type="text" class=" form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >学员预算:</label>
                <input type="text" class=" form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >报价:</label>
                <input type="text" class="form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >驾校低价:</label>
                <input type="text" class="form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >成交价格:</label>
                <input type="text" class=" form-control ">
            </div>
            <div class="form-group col-xs-12 col-md-6 col-lg-4">
                <label >成交时间:</label>
                <input type="text" class="form-control ">
            </div>
            <!-- /.form group -->

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-lg btn-success">提交</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ClueEditorComponent",
        props: ['clueItem']
    }
</script>

<style scoped>

</style>