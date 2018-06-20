<template>
    <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move;">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">待处理线索</h3>

            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">

                    <li><a href="#">«</a></li>
                    <li v-for="n in totalPage" :class="{active: active( n )}"><a href="#" v-on:click="jump( n )" >{{ n }}</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <ul class="todo-list ui-sortable">
                <li v-for = "item in items" v-on:click = "popupEditor(item)">
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    <!-- checkbox -->
                    <input type="checkbox" value="">
                    <!-- todo text -->
                    <span class="text">学员：{{ item.name}} 手机：{{ item.mobile }}</span>
                    <!-- Emphasis label -->
                    <small class="label {{ labelClass(item.pass_time) }}"><i class="fa fa-clock-o"></i> {{ passTime(item.pass_time) }}</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="fa fa-edit" v-on:click = "popupEditor(item)"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import ClueEditor from "./ClueEditorComponent";
    export default {
        props: ['items', 'totalPage'],
        data(){
            return {
                'currentPage': 1,
                'selectedItem': null
            };
        },
        components:{
            "clue-editor": ClueEditor
        },
        method: {
            active(index) {
                return this.currentPage === index ? 'active' : '';
            },
            passTime: function (time) {
                if (time < 60) {
                    return time + '秒前';
                } else if (time < 3600) {
                    return Math.floor(time / 60) + '分钟前';
                } else if (time < 84600) {
                    return Math.floor(time / 3600) + '小时前';
                } else if (time < 604800) {
                    return Math.floor(time / 84600) + '天前';
                }else if(time < 2592000) {
                    return Math.floor(time / 604800) + '周前';
                }else {
                    return "一个月前";
                }
            },
            labelClass(time) {
                if (time < 60) {
                    return `label-danger`;
                } else if (time < 3600) {
                    return `label-info`;
                } else if (time < 84600) {
                    return `label-warning`;
                } else if (time < 604800) {
                    return `label-success`;
                }else if(time < 2592000) {
                    return `label-primary`;
                }else {
                    return `label-default`;
                }
            },
            jump(page) {
                if(page !== this.currentPage) {

                }
                return ;
            },
            popupEditor(item) {

            }
        },
        mounted() {
            console.log('ToDoList Component mounted.');
        }
    }
</script>
