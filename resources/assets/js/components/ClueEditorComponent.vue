<template>
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">学员线索编辑</h3>
        </div>
        <div class="box-body">
            <!-- Color Picker -->
            <div class="form-group">
                <label>Color picker:</label>
                <input type="text" class="form-control my-colorpicker1 colorpicker-element">
            </div>
            <!-- /.form group -->

            <!-- Color Picker -->
            <div class="form-group">
                <label>Color picker with addon:</label>

                <div class="input-group my-colorpicker2 colorpicker-element">
                    <input type="text" class="form-control">

                    <div class="input-group-addon">
                        <i></i>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- time Picker -->
            <div class="bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">03</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">15</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">PM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group">
                        <input type="text" class="form-control timepicker">

                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</template>

<script>
    export default {
        name: "ClueEditorComponent"
    }
</script>

<style scoped>

</style>